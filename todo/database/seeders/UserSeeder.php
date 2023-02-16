<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'User 1',
            'email' => 'email1@email.com',
            'password' => md5(rand(1, 100))
        ]);

        DB::table('users')->insert([
            'name' => 'User 2',
            'email' => 'email2@email.com',
            'password' => md5(rand(1, 100))
        ]);
    }
}
