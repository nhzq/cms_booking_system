<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HomepageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Homepage');

        DB::table('homepages')->insert([
        	'company_name' => $faker->name,
        	'headline' => $faker->sentence,
        	'headline_brief' => $faker->paragraph,
        	'services_brief' => $faker->paragraph,
        	'service_1' => $faker->sentence,
        	'service_2' => $faker->sentence,
        	'service_3' => $faker->sentence,
        	'service_4' => $faker->sentence,
        	'phone' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        	'email' => $faker->email,
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
