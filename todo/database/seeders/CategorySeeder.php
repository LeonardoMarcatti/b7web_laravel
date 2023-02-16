<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'color' => '#F00',
            'description' => 'Category 1',
            'user_id' => 1
        ]);

        Category::create([
            'color' => '#0F0',
            'description' => 'Category 2',
            'user_id' => 1
        ]);

        Category::create([
            'color' => '#00F',
            'description' => 'Category 3',
            'user_id' => 2
        ]);
    }
}
