<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location_1 = Location::create([
        	'name' => 'MPWS Training Centre'
        ]);

        $location_2 = Location::create([
        	'name' => 'Institut Latihan Perindustrian Kuala Lumpur'
        ]);

        $location_3 = Location::create([
        	'name' => 'Judicial and Legal Training Institute'
        ]);

        $location_4 = Location::create([
        	'name' => 'Bilik Seminar Shah Alam'
        ]);

        $location_5 = Location::create([
        	'name' => 'Pusat Latihan JAKOA Damansara Damai'
        ]);
    }
}
