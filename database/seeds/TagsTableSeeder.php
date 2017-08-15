<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
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
                'name' => 'tag1',
            ],
            [
                'name' => 'tag2',
            ],
            [
                'name' => 'tag3',
            ],
            [
                'name' => 'tag4',
            ],
            [
                'name' => 'tag5',
            ],
        ];
        \DB::table('tags')->insert($data);
    }
}
