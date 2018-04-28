<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            array(
                'user_id' => '1',
                'name' => 'All Purpose Flour',
                'category_image' => 'http://206.189.33.253/storage/categories/all-purpose_flour.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Hard Wheat Flour',
                'category_image' => 'http://206.189.33.253/storage/categories/hard_wheat_flour.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Soft Wheat Flour',
                'category_image' => 'http://206.189.33.253/storage/categories/soft_wheat_flour.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Cake Flour',
                'category_image' => 'http://206.189.33.253/storage/categories/cake_flour.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
