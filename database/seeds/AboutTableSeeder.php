<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\About');

        DB::table('abouts')->insert([
        	'vision' => $faker->paragraph,
        	'mission' => $faker->paragraph,
        	'body' => $faker->paragraph,
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
