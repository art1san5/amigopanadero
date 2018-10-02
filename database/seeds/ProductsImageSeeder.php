<?php

use Illuminate\Database\Seeder;

class ProductsImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')
            ->where('id',1)
            ->update([
                'product_image' => 'http://206.189.33.253/storage/about_products/hard_flour_slide.jpg',
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('abouts')
            ->where('id',2)
            ->update([
                'product_image' => 'http://206.189.33.253/storage/about_products/soft_flour_slide.jpg',
                'updated_at' => Carbon\Carbon::now(),
            ]);

        DB::table('abouts')
            ->where('id',3)
            ->update([
                'product_image' => 'http://206.189.33.253/storage/about_products/specialized_flour_slide.jpg',
                'updated_at' => Carbon\Carbon::now(),
            ]);
    }
}
