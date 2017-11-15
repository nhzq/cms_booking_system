<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewspostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Newspost');

        DB::table('newsposts')->insert([
        	'title' => $faker->paragraph,
        	'content' => $faker->paragraph,
        	'slug' => $faker->sentence,
        	'created_at' => \Carbon\Carbon::now(),
        	'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
