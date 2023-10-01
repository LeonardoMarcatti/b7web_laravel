<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'title' => 'Primeiro Invoice',
            'value' => 123.45,
            'user_id' => 1,
            'address_id' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('invoices')->insert([
            'title' => 'Segundo Invoice',
            'value' => 9876.54,
            'user_id' => 2,
            'address_id' => 5,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('invoices')->insert([
            'title' => 'Terceiro Invoice',
            'value' => 43.21,
            'user_id' => 3,
            'address_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('invoices')->insert([
            'title' => 'Quarto Invoice',
            'value' => 43.21,
            'user_id' => 2,
            'address_id' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
