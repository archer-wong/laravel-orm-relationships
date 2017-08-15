<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array(
                'name' => 'admin'
            ),
            array(
                'name' => 'user'
            )
        );
        $relations = array(
            array(
                'user_id' => '1',
                'role_id' => '1'
            ),
            array(
                'user_id' => '1',
                'role_id' => '2'
            ),
            array(
                'user_id' => '2',
                'role_id' => '1'
            ),
            array(
                'user_id' => '2',
                'role_id' => '2'
            ),
            array(
                'user_id' => '3',
                'role_id' => '2'
            )
        );
        \DB::table('roles')->insert($roles);
        \DB::table('role_user')->insert($relations);
    }
}
