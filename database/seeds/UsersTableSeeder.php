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
        DB::table('users')->insert([
            'name' => 'Lucas Ramos',
            'email' => 'lramos_ads@hotmail.com',
            'role' => 'super',
            'password' => bcrypt('p4ssw0rd'),
        ]);
        DB::table('users')->insert([
            'name' => 'Natio',
            'email' => 'admin@natiocriativo.com',
            'role' => 'super',
            'password' => bcrypt('p4ssw0rd'),
        ]);
        DB::table('users')->insert([
            'name' => 'Renata Zapelli',
            'email' => 'renata@natiocriativo.com',
            'role' => 'super',
            'password' => bcrypt('p4ssw0rd'),
        ]);
    }
}
