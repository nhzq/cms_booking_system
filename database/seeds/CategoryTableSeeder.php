<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_1 = Category::create([
        	'name' => 'Standards Based Management Systems',
            'slug' => str_slug('Standards Based Management Systems')
        ]);

        $category_2 = Category::create([
        	'name' => 'Quality & Innovations',
            'slug' => str_slug('Quality & Innovations')
        ]);

        $category_3 = Category::create([
        	'name' => 'Technology & Certification Programmes',
            'slug' => str_slug('Technology & Certification Programmes')
        ]);

        $category_4 = Category::create([
        	'name' => 'Lead Auditor Courses',
            'slug' => str_slug('Lead Auditor Courses')
        ]);

        $category_5 = Category::create([
        	'name' => 'Recognition Schemes',
            'slug' => str_slug('Recognition Schemes')
        ]);

        // $category_1 = new Category();
        // $category_1->name = 'Standards Based Management Systems';
        // $category_1->slug = str_slug($category_1->name);
        // $category_1->save();

        // $category_2 = new Category();
        // $category_2->name = 'Quality & Innovations';
        // $category_2->slug = str_slug($category_2->name);
        // $category_2->save();

        // $category_3 = new Category();
        // $category_3->name = 'Technology & Certification Programmes';
        // $category_3->slug = str_slug($category_3->name);
        // $category_3->save();

        // $category_4 = new Category();
        // $category_4->name = 'Lead Auditor Courses';
        // $category_4->slug = str_slug($category_4->name);
        // $category_4->save();

        // $category_5 = new Category();
        // $category_5->name = 'Recognition Schemes';
        // $category_5->slug = str_slug($category_5->name);
        // $category_5->save();
    }
}
