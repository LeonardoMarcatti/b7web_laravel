<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'user_id' => 1,
            'description' => 'Tarefa 1',
            'date' => date('Y-m-d h:i:s'),
            'title' => 'Título 1',
            'category_id' => 1
        ]);

        Task::create([
            'user_id' => 1,
            'description' => 'Tarefa 2',
            'date' => date('Y-m-d h:i:s'),
            'title' => 'Título 2',
            'category_id' => 2
        ]);

        Task::create([
            'user_id' => 2,
            'description' => 'Tarefa 1',
            'date' => date('Y-m-d h:i:s'),
            'title' => 'Título 1',
            'category_id' => 3
        ]);
    }
}
