<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('addresses')->insert([
            'address' => 'Alameda Florida n° 55',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 1
        ]);

        DB::table('addresses')->insert([
            'address' => 'Passo Santo Amaro n° 95',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 1
        ]);

        DB::table('addresses')->insert([
            'address' => 'Avenida Américas n° 1001',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 1
        ]);

        DB::table('addresses')->insert([
            'address' => 'Rua dos Bobos, n° 0',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 2
        ]);

        DB::table('addresses')->insert([
            'address' => 'Beco do Tiroteio sn',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 2
        ]);

        DB::table('addresses')->insert([
            'address' => 'Vila da Cadela Moiada, n° 10',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => 3
        ]);
    }
}
