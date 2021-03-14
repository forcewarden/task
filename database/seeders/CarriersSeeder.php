<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarriersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carriers')->insert([
            [
                'name' => 'Nittsu',
                'phone' => '03-4452-1298',
            ],
            [
                'name' => 'Sagawa',
                'phone' => '03-3366-1967',
            ],
            [
                'name' => 'Yamato',
                'phone' => '03-5628-1111',
            ],
            [
                'name' => 'ABC Cargo',
                'phone' => '03-4176-8954',
            ],
            [
                'name' => 'Seino',
                'phone' => '03-2212-8865',
            ],
            [
                'name' => 'Moving 123',
                'phone' => '03-6732-7721',
            ],
            [
                'name' => 'Home Logi',
                'phone' => '03-2217-3277',
            ],
            [
                'name' => 'Rocky',
                'phone' => '03-5522-6743',
            ],
            [
                'name' => 'Camel',
                'phone' => '03-3351-2121',
            ],
            [
                'name' => 'Super Cargo',
                'phone' => '03-4312-7789',
            ],
            [
                'name' => 'Japan Logistics',
                'phone' => '03-5127-9876',
            ],
            [
                'name' => 'Zoom Zoom',
                'phone' => '03-4312-6315',
            ],
            [
                'name' => 'Quick Cargo',
                'phone' => '03-3325-8966',
            ],
            [
                'name' => 'Gust',
                'phone' => '03-6322-2468',
            ],
            [
                'name' => 'Red Arrow',
                'phone' => '03-4633-8655',
            ],
            [
                'name' => 'Trans Japan',
                'phone' => '03-2335-6455',
            ],
            [
                'name' => 'Attre',
                'phone' => '03-3677-4321',
            ],
            [
                'name' => 'Golden Track',
                'phone' => '03-5812-9969',
            ],
            [
                'name' => 'YCAT',
                'phone' => '03-4433-7866',
            ],
            [
                'name' => 'Sonic Cargo',
                'phone' => '03-3811-3297',
            ],
            [
                'name' => 'XYZ Express',
                'phone' => '03-6661-2234',
            ],
        ]);
    }
}
