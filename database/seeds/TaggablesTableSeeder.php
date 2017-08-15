<?php

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
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
                'taggable_id' => 1,
                'taggable_type' => 'App\Models\Post',
                'tag_id' => 1,
            ],
            [
                'taggable_id' => 3,
                'taggable_type' => 'App\Models\Post',
                'tag_id' => 1,
            ],
            [
                'taggable_id' => 4,
                'taggable_type' => 'App\Models\Post',
                'tag_id' => 1,
            ],
            [
                'taggable_id' => 3,
                'taggable_type' => 'App\Models\Video',
                'tag_id' => 2,
            ],
            [
                'taggable_id' => 2,
                'taggable_type' => 'App\Models\Video',
                'tag_id' => 2,
            ],
            [
                'taggable_id' => 1,
                'taggable_type' => 'App\Models\Vidoe',
                'tag_id' => 2,
            ],
            [
                'taggable_id' => 1,
                'taggable_type' => 'App\Models\Post',
                'tag_id' => 3,
            ],
        ];
        \DB::table('taggables')->insert($data);
    }
}
