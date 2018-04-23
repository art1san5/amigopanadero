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
                'name' => 'Category One',
                'category_image' => 'drivers/category_one.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Two',
                'category_image' => 'drivers/category_two.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Three',
                'category_image' => 'drivers/category_three.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Four',
                'category_image' => 'drivers/category_four.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Five',
                'category_image' => 'drivers/category_five.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Six',
                'category_image' => 'drivers/category_six.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'name' => 'Category Seven',
                'category_image' => 'drivers/category_seven.jpg',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
