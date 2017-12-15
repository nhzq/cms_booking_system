<?php

use Illuminate\Database\Seeder;
use App\Subcategory;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub_1_1 = Subcategory::create([
        	'name' => 'OHSAS 18001:2007 OCCUPATIONAL HEALTH AND SAFETY MANAGEMENT SYSTEMS (OHSMS)',
            'category_id' => 1,
            'slug' => str_slug('OHSAS 18001:2007 OCCUPATIONAL HEALTH AND SAFETY MANAGEMENT SYSTEMS (OHSMS)')
        ]);

        $sub_1_2 = Subcategory::create([
        	'name' => 'ISO 9001:2015 QUALITY MANAGEMENT SYSTEMS',
            'category_id' => 1,
            'slug' => str_slug('ISO 9001:2015 QUALITY MANAGEMENT SYSTEMS')
        ]);

        $sub_1_3 = Subcategory::create([
        	'name' => 'ISO 9001:2015 SISTEM PENGURUSAN KUALITI',
            'category_id' => 1,
            'slug' => str_slug('ISO 9001:2015 SISTEM PENGURUSAN KUALITI')
        ]);

        $sub_2_1 = Subcategory::create([
        	'name' => '5S HOUSEKEEPING TECHNIQUES',
            'category_id' => 2,
            'slug' => str_slug('5S HOUSEKEEPING TECHNIQUES')
        ]);

        $sub_2_2 = Subcategory::create([
        	'name' => 'TEKNIK 5S - KEARAH PERSEKITARAN BERKUALITI',
            'category_id' => 2,
            'slug' => str_slug('TEKNIK 5S - KEARAH PERSEKITARAN BERKUALITI')
        ]);

        $sub_2_3 = Subcategory::create([
        	'name' => 'QUALITY & INNOVATION',
            'category_id' => 2,
            'slug' => str_slug('QUALITY & INNOVATION')
        ]);

        $sub_3_1 = Subcategory::create([
        	'name' => 'WELDING TECHNOLOGY PROGRAMMES',
            'category_id' => 3,
            'slug' => str_slug('WELDING TECHNOLOGY PROGRAMMES')
        ]);

        $sub_3_2 = Subcategory::create([
        	'name' => 'CERTIFIED WELDING TECHNOLOGY PROGRAMMES',
            'category_id' => 3,
            'slug' => str_slug('CERTIFIED WELDING TECHNOLOGY PROGRAMMES')
        ]);

        $sub_3_3 = Subcategory::create([
        	'name' => 'CERTIFIED NON-DESTRUCTIVE TESTING (NDT) PROGRAMMES',
            'category_id' => 3,
            'slug' => str_slug('CERTIFIED NON-DESTRUCTIVE TESTING (NDT) PROGRAMMES')
        ]);

        $sub_4_1 = Subcategory::create([
        	'name' => 'LEAD AUDITOR ISO 9001:2015 QUALITY MANAGEMENT SYSTEMS',
            'category_id' => 4,
            'slug' => str_slug('LEAD AUDITOR ISO 9001:2015 QUALITY MANAGEMENT SYSTEMS')
        ]);

        $sub_4_2 = Subcategory::create([
        	'name' => 'LEAD AUDITOR OHSAS 18001:2007 OHS MANAGEMENT SYSTEMS',
            'category_id' => 4,
            'slug' => str_slug('LEAD AUDITOR OHSAS 18001:2007 OHS MANAGEMENT SYSTEMS')
        ]);

        $sub_4_3 = Subcategory::create([
        	'name' => 'LEAD AUDITOR INTEGRATED MANAGEMENT SYSTEMS (IMS) ISO 9001, ISO 14001 & OHSAS 18001',
            'category_id' => 4,
            'slug' => str_slug('LEAD AUDITOR INTEGRATED MANAGEMENT SYSTEMS (IMS) ISO 9001, ISO 14001 & OHSAS 18001')
        ]);

        $sub_5_1 = Subcategory::create([
        	'name' => 'TQFTM (TOTAL QUALITY FAST TRACK MODEL)',
            'category_id' => 5,
            'slug' => str_slug('TQFTM (TOTAL QUALITY FAST TRACK MODEL)')
        ]);

        $sub_5_2 = Subcategory::create([
        	'name' => 'GREEN 5-S',
            'category_id' => 5,
            'slug' => str_slug('GREEN 5-S')
        ]);

        $sub_5_3 = Subcategory::create([
        	'name' => 'CSM (CUSTOMER SERVICE MANAGEMENT)',
            'category_id' => 5,
            'slug' => str_slug('CUSTOMER SERVICE MANAGEMENT')
        ]);
    }
}
