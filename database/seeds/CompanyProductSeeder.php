<?php

use Illuminate\Database\Seeder;

class CompanyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')
            ->insert([
                [
                    'user_id' => '1',
                    'product_name' => 'Hard Wheat Flour',
                    'product_image' => 'http://10.96.16.40/amigopanadero/storage/app/public/about_products/hard_flour.png',
                    'product_description' => 'Flour milled from selected hard spring wheat, free from foreign matter and infestation.',
                    'created_at' => Carbon\Carbon::now(),
                    'updated_at' => Carbon\Carbon::now(),
                ],
                 [
                    'user_id' => '1',
                    'product_name' => 'Soft Wheat Flour',
                    'product_image' => 'http://10.96.16.40/amigopanadero/storage/app/public/about_products/soft_flour.png',
                    'product_description' => 'Flour milled from selected soft spring wheat, free from foreign matter and infestation; enhanced with Iron and Vitamin A.',
                    'created_at' => Carbon\Carbon::now(),
                    'updated_at' => Carbon\Carbon::now(),
                ],
                 [
                    'user_id' => '1',
                    'product_name' => 'Custom Made Flour',
                    'product_image' => 'http://10.96.16.40/amigopanadero/storage/app/public/about_products/specialized_flour.png',
                    'product_description' => 'We custom manufacture flour of special specification and we will be more than happy to provide your specialy made flour for your special needs.',
                    'created_at' => Carbon\Carbon::now(),
                    'updated_at' => Carbon\Carbon::now(),
                ],
            ]);
    }
}
