<?php

namespace App\Services;

use App\Models\Carrier;
use App\Models\CarrierZip;
use GuzzleHttp\Client;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class GeoService
{
    /**
     * @var Client $client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $zip
     * @return array|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCoordinatesFromZip($zip)
    {
        $response = $this->client->get('https://public.opendatasoft.com/api/records/1.0/search/', [
            'query' => [
                'q' => $zip,
                'dataset' => 'geonames-postal-code',
            ],
        ]);
        $content = $response->getBody()->getContents();
        $values  = json_decode($content, true);
        return $values['records'][0]['fields']['coordinates'] ?? null;
    }

    /**
     * @param array $coordinates_from
     * @param array $coordinates_to
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDistanceBetweenPoints(array $coordinates_from, array $coordinates_to)
    {
        $response  = $this->client->get('https://api.openrouteservice.org/v2/directions/driving-car', [
            'query' => [
                'api_key' => env('KEY_API_ROUTES'),
                'start' => implode(',', $coordinates_from),
                'end'   => implode(',', $coordinates_to)
            ]
        ]);
        $content = $response->getBody()->getContents();
        $values = json_decode($content, true);
        return $values['features'][0]['properties']['segments'][0]['distance'] ?? 0;
    }

    /**
     * @param array $zipCodes
     * @return mixed
     */
    public function getCarriers(array $zipCodes)
    {
        return Carrier::select(['name', 'phone'])->joinSub(
            CarrierZip::whereIn('zip', $zipCodes)
                      ->select(['carrier_id', DB::raw('count(zip) as count')])
                      ->groupBy('carrier_id'),
            'cza', 'carriers.id', '=', 'carrier_id'
        )->where('count', '>', 1)->get();
    }
}
