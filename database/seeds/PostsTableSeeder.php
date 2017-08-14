<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = array(
            array(
                'user_id' => 1,
                'title' => $faker->word,
                'content' => $faker->text,
            ),
            array(
                'user_id' => 1,
                'title' => $faker->word,
                'content' => $faker->text,
            ),
            array(
                'user_id' => 2,
                'title' => $faker->word,
                'content' => $faker->text,
            ),
            array(
                'user_id' => 2,
                'title' => $faker->word,
                'content' => $faker->text,
            ),
            array(
                'user_id' => 2,
                'title' => $faker->word,
                'content' => $faker->text,
            )
        );
        \DB::table('posts')->insert($data);
    }
}
