<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Service');

        DB::table('services')->insert([
        	'intro' => $faker->paragraph,
        	'body' => $faker->paragraph,
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
