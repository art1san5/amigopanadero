<?php

use Illuminate\Database\Seeder;

class VideoUpdate0505TableSeeder extends Seeder
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
                'path' => 'http://206.189.33.253/storage/videos/brownies.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/red_velvet_cupcake.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/peanut_butter_cookies.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/bananacake.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/butterscotch.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'http://206.189.33.253/storage/videos/sugar_cookies.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
          ]);
    }
}
