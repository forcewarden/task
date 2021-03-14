<?php

namespace Database\Seeders;

use App\Models\Carrier;
use App\Models\CarrierZip;
use Illuminate\Database\Seeder;

class CarrierZipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrier::where(['name' => 'Nittsu'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 120]),
                (new CarrierZip())->fill(['zip' => 121]),
                (new CarrierZip())->fill(['zip' => 123]),
                (new CarrierZip())->fill(['zip' => 116]),
                (new CarrierZip())->fill(['zip' => 174]),
            ]
        );
        Carrier::where(['name' => 'Sagawa'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 123]),
                (new CarrierZip())->fill(['zip' => 143]),
                (new CarrierZip())->fill(['zip' => 174]),
                (new CarrierZip())->fill(['zip' => 175]),
                (new CarrierZip())->fill(['zip' => 132]),
            ]
        );
        Carrier::where(['name' => 'Yamato'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 174]),
                (new CarrierZip())->fill(['zip' => 175]),
                (new CarrierZip())->fill(['zip' => 132]),
                (new CarrierZip())->fill(['zip' => 133]),
                (new CarrierZip())->fill(['zip' => 134]),
            ]
        );
        Carrier::where(['name' => 'ABC Cargo'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 133]),
                (new CarrierZip())->fill(['zip' => 134]),
                (new CarrierZip())->fill(['zip' => 143]),
                (new CarrierZip())->fill(['zip' => 144]),
                (new CarrierZip())->fill(['zip' => 145]),
            ]
        );
        Carrier::where(['name' => 'Seino'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 144]),
                (new CarrierZip())->fill(['zip' => 145]),
                (new CarrierZip())->fill(['zip' => 146]),
                (new CarrierZip())->fill(['zip' => 124]),
                (new CarrierZip())->fill(['zip' => 125]),
            ]
        );
        Carrier::where(['name' => 'Moving 123'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 146]),
                (new CarrierZip())->fill(['zip' => 124]),
                (new CarrierZip())->fill(['zip' => 125]),
                (new CarrierZip())->fill(['zip' => 114]),
                (new CarrierZip())->fill(['zip' => 115]),
            ]
        );
        Carrier::where(['name' => 'Home Logi'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 114]),
                (new CarrierZip())->fill(['zip' => 115]),
                (new CarrierZip())->fill(['zip' => 135]),
                (new CarrierZip())->fill(['zip' => 136]),
                (new CarrierZip())->fill(['zip' => 140]),
            ]
        );
        Carrier::where(['name' => 'Rocky'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 135]),
                (new CarrierZip())->fill(['zip' => 136]),
                (new CarrierZip())->fill(['zip' => 140]),
                (new CarrierZip())->fill(['zip' => 141]),
                (new CarrierZip())->fill(['zip' => 142]),
            ]
        );
        Carrier::where(['name' => 'Rocky'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 141]),
                (new CarrierZip())->fill(['zip' => 142]),
                (new CarrierZip())->fill(['zip' => 135]),
                (new CarrierZip())->fill(['zip' => 150]),
                (new CarrierZip())->fill(['zip' => 151]),
            ]
        );
        Carrier::where(['name' => 'Super Cargo'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 135]),
                (new CarrierZip())->fill(['zip' => 150]),
                (new CarrierZip())->fill(['zip' => 151]),
                (new CarrierZip())->fill(['zip' => 160]),
                (new CarrierZip())->fill(['zip' => 161]),
            ]
        );
        Carrier::where(['name' => 'Japan Logistics'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 151]),
                (new CarrierZip())->fill(['zip' => 160]),
                (new CarrierZip())->fill(['zip' => 161]),
                (new CarrierZip())->fill(['zip' => 162]),
                (new CarrierZip())->fill(['zip' => 163]),
            ]
        );
        Carrier::where(['name' => 'Zoom Zoom'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 162]),
                (new CarrierZip())->fill(['zip' => 163]),
                (new CarrierZip())->fill(['zip' => 166]),
                (new CarrierZip())->fill(['zip' => 167]),
                (new CarrierZip())->fill(['zip' => 168]),
            ]
        );
        Carrier::where(['name' => 'Quick Cargo'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 166]),
                (new CarrierZip())->fill(['zip' => 167]),
                (new CarrierZip())->fill(['zip' => 168]),
                (new CarrierZip())->fill(['zip' => 130]),
                (new CarrierZip())->fill(['zip' => 131]),
            ]
        );
        Carrier::where(['name' => 'Gust'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 130]),
                (new CarrierZip())->fill(['zip' => 131]),
                (new CarrierZip())->fill(['zip' => 154]),
                (new CarrierZip())->fill(['zip' => 156]),
                (new CarrierZip())->fill(['zip' => 157]),
            ]
        );
        Carrier::where(['name' => 'Red Arrow'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 158]),
                (new CarrierZip())->fill(['zip' => 110]),
                (new CarrierZip())->fill(['zip' => 157]),
                (new CarrierZip())->fill(['zip' => 158]),
                (new CarrierZip())->fill(['zip' => 111]),
            ]
        );
        Carrier::where(['name' => 'Trans Japan'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 158]),
                (new CarrierZip())->fill(['zip' => 111]),
                (new CarrierZip())->fill(['zip' => 104]),
                (new CarrierZip())->fill(['zip' => 103]),
                (new CarrierZip())->fill(['zip' => 102]),
            ]
        );
        Carrier::where(['name' => 'Attre'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 104]),
                (new CarrierZip())->fill(['zip' => 103]),
                (new CarrierZip())->fill(['zip' => 102]),
                (new CarrierZip())->fill(['zip' => 101]),
                (new CarrierZip())->fill(['zip' => 100]),
            ]
        );
        Carrier::where(['name' => 'Golden Track'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 120]),
                (new CarrierZip())->fill(['zip' => 121]),
                (new CarrierZip())->fill(['zip' => 123]),
                (new CarrierZip())->fill(['zip' => 116]),
                (new CarrierZip())->fill(['zip' => 174]),
            ]
        );
        Carrier::where(['name' => 'YCAT'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 144]),
                (new CarrierZip())->fill(['zip' => 145]),
                (new CarrierZip())->fill(['zip' => 146]),
                (new CarrierZip())->fill(['zip' => 124]),
                (new CarrierZip())->fill(['zip' => 125]),
            ]
        );
        Carrier::where(['name' => 'Sonic Cargo'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 162]),
                (new CarrierZip())->fill(['zip' => 163]),
                (new CarrierZip())->fill(['zip' => 166]),
                (new CarrierZip())->fill(['zip' => 167]),
                (new CarrierZip())->fill(['zip' => 168]),
            ]
        );
        Carrier::where(['name' => 'XYZ Express'])->first()->zipCodes()->saveMany(
            [
                (new CarrierZip())->fill(['zip' => 158]),
                (new CarrierZip())->fill(['zip' => 111]),
                (new CarrierZip())->fill(['zip' => 104]),
                (new CarrierZip())->fill(['zip' => 103]),
                (new CarrierZip())->fill(['zip' => 102]),
            ]
        );
    }
}
