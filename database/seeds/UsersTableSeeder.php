<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$users = factory(App\Models\User::class)->create();
        $users = factory(App\Models\User::class)->make();
        $users->save();
    }
}
