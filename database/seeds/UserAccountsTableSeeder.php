<?php

use Illuminate\Database\Seeder;
use App\Models\UserAccount;

class UserAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->create()->each(function($u) {
                $u->getAccount()->save(factory(App\Models\UserAccount::class)->make());
        });
        factory(App\Models\User::class, 2)->create()->each(function($u) {
                $u->getAccount()->save(factory(App\Models\UserAccount::class)->make());
        });
        factory(App\Models\User::class, 2)->create()->each(function($u) {
                $u->getAccount()->save(factory(App\Models\UserAccount::class,'mark')->make());
        });
        factory(App\Models\User::class, 2)->create()->each(function($u) {
                $u->getAccount()->save(factory(App\Models\UserAccount::class,'mark2')->make());
        });

    }
}
