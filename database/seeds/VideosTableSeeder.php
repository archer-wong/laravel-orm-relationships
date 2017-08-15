<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'video_1 title',
                'content' => 'video_1 content',
                'desc' => 'video_1 description',
                'user_id' => 1,
                'status' => 0,
            ],
            [
                'title' => 'video_2 title',
                'content' => 'video_2 content',
                'desc' => 'video_2 description',
                'user_id' => 1,
                'status' => 0,
            ],
            [
                'title' => 'video_3 title',
                'content' => 'video_3 content',
                'desc' => 'video_3 description',
                'user_id' => 1,
                'status' => 1,
            ],
            [
                'title' => 'video_4 title',
                'content' => 'video_4 content',
                'desc' => 'video_4 description',
                'user_id' => 2,
                'status' => 0,
            ],
            [
                'title' => 'video_5 title',
                'content' => 'video_5 content',
                'desc' => 'video_5 description',
                'user_id' => 2,
                'status' => 1,
            ],
        ];
        \DB::table('videos')->insert($data);
    }
}
