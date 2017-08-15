<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserAccountsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(TaggablesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
