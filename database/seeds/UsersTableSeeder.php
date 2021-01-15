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
        $user = \App\User::create([
            'name' => 'superadmin',
            'email' =>'superadmin@ehigh.com',
            'first_name' => 'super',
            'last_name' => 'admin',
            'password' => bcrypt('123456'),
        ]);

        $user->attachRole('superadministrator');
    }
}
