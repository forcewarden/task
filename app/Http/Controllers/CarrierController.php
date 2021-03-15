<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarrierCalculateRequest;
use App\Services\GeoService;
use GuzzleHttp\Exception\GuzzleException;

class CarrierController extends Controller
{
    /**
     * @var GeoService $geoService
     */
    private $geoService;

    /**
     * CarrierController constructor.
     * @param GeoService $geoService
     */
    public function __construct(GeoService $geoService)
    {
        $this->geoService = $geoService;
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('welcome', ['hasData' => false]);
    }

    /**
     * @param CarrierCalculateRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     * @throws GuzzleException
     */
    public function calculate(CarrierCalculateRequest $request)
    {
        $zip_from = $request->post('zip_from');
        $zip_to   = $request->post('zip_to');

        $coordinates_from = $this->geoService->getCoordinatesFromZip($zip_from);
        $coordinates_to   = $this->geoService->getCoordinatesFromZip($zip_to);
        if ($coordinates_from && $coordinates_to) {
            $distance = $this->geoService->getDistanceBetweenPoints(
                array_reverse($coordinates_from),
                array_reverse($coordinates_to)
            );
            $carriers = $this->geoService->getCarriers([
                substr($zip_from, 0, 3),
                substr($zip_to, 0, 3)
            ]);

            return view('welcome', [
                'hasData'  => true,
                'carriers' => $carriers,
                'distance' => $distance,
                'coordinates' => [
                    'from' => $coordinates_from,
                    'to'   => $coordinates_to
                ]
            ]);
        }
        return redirect()->back()->withErrors(['Координат по заданным zip-кодам не найдено.']);
    }
}
