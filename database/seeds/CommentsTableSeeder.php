<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data =[
            [
                'content' => $faker->text,
                'user_id' => 1,
                'item_id' => 1,
                'item_type' => 'App\Models\Post',
            ],
            [
                'content' => $faker->text,
                'user_id' => 2,
                'item_id' => 1,
                'item_type' => 'App\Models\Video',
            ],
            [
                'content' => $faker->text,
                'user_id' => 1,
                'item_id' => 3,
                'item_type' => 'App\Models\Post',
            ],
            [
                'content' => $faker->text,
                'user_id' => 2,
                'item_id' => 2,
                'item_type' => 'App\Models\Video',
            ],
            [
                'content' => $faker->text,
                'user_id' => 1,
                'item_id' => 4,
                'item_type' => 'App\Models\Post',
            ],
            [
                'content' => $faker->text,
                'user_id' => 2,
                'item_id' => 4,
                'item_type' => 'App\Models\Video',
            ],
        ];
        \DB::table('comments')->insert($data);
    }
}
