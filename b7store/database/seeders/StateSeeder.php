<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\StatesModel;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            'name' => 'Acre',
            'value' => 1
        ]);
        DB::table('states')->insert([
            'name' => 'Alagoas',
            'value' => 2
        ]);
        DB::table('states')->insert([
            'name' => 'Amapá',
            'value' => 3
        ]);
        DB::table('states')->insert([
            'name' => 'Amazonas',
            'value' => 4
        ]);
        DB::table('states')->insert([
            'name' => 'Bahía',
            'value' => 5
        ]);
        DB::table('states')->insert([
            'name' => 'Ceará',
            'value' => 6
        ]);
        DB::table('states')->insert([
            'name' => 'Espírito Santo',
            'value' => 7
        ]);
        DB::table('states')->insert([
            'name' => 'Goiás',
            'value' => 8
        ]);
        DB::table('states')->insert([
            'name' => 'Maranhão',
            'value' => 9
        ]);
        DB::table('states')->insert([
            'name' => 'Mato Grosso',
            'value' => 10
        ]);
        DB::table('states')->insert([
            'name' => 'Mato Grosso do Sul',
            'value' => 11
        ]);
        DB::table('states')->insert([
            'name' => 'Minas Gerais',
            'value' => 12
        ]);
        DB::table('states')->insert([
            'name' => 'Pará',
            'value' => 13
        ]);
        DB::table('states')->insert([
            'name' => 'Paraná',
            'value' => 14
        ]);
        DB::table('states')->insert([
            'name' => 'Pernanbuco',
            'value' => 15
        ]);
        DB::table('states')->insert([
            'name' => 'Piauí',
            'value' => 16
        ]);
        DB::table('states')->insert([
            'name' => 'Rio de Janeiro',
            'value' => 17
        ]);
        DB::table('states')->insert([
            'name' => 'Rio Grande do Norte',
            'value' => 18
        ]);
        DB::table('states')->insert([
            'name' => 'Rio Grande do Sul',
            'value' => 19
        ]);
        DB::table('states')->insert([
            'name' => 'Rondônia',
            'value' => 20
        ]);
        DB::table('states')->insert([
            'name' => 'Roraima',
            'value' => 21
        ]);
        DB::table('states')->insert([
            'name' => 'Santa Catarina',
            'value' => 22
        ]);
        DB::table('states')->insert([
            'name' => 'São Paulo',
            'value' => 23
        ]);
        DB::table('states')->insert([
            'name' => 'Sergipe',
            'value' => 24
        ]);
        DB::table('states')->insert([
            'name' => 'Tocantins',
            'value' => 25
        ]);
        DB::table('states')->insert([
            'name' => 'Distrito Federal',
            'value' => 26
        ]);
    }
}
