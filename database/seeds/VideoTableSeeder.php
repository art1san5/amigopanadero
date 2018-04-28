<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/loaf_bread.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/whole_wheat_bread.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/french_bread.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/burger_buns.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
