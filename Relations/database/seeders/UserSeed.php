<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User 1',
            'email' => 'user1@test.com',
            'password' => \md5('123'),
            'address_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'User 2',
            'email' => 'user2@test.com',
            'password' => \md5('321'),
            'address_id' => 2
        ]);

        DB::table('users')->insert([
            'name' => 'User 3',
            'email' => 'user3@test.com',
            'password' => \md5('312'),
            'address_id' => 1
        ]);
    }
}
