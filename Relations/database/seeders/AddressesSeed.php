<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'address' => 'Vila da Cadela Moiada, n° 10'
        ]);

        DB::table('addresses')->insert([
            'address' => 'Rua dos Bobos, n° 0'
        ]);
    }
}
