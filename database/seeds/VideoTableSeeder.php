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
                'path' => 'videos/video_1.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_2.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_3.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_4.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_5.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_6.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_7.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_8.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_9.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_10.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_11.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_12.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_13.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_14.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_15.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_16.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_17.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_18.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_19.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_20.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
            array(
                'user_id' => '1',
                'path' => 'videos/video_21.mp4',
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ),
        ]);
    }
}
