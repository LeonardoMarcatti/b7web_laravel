<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => \rand(1,15),
            'description' => $this->faker->text(50),
            'date' => $this->faker->dateTime(),
            'title' => $this->faker->text(10),
            'category_id' => Category::all()->random(),
            'user_id' => User::all()->random()
        ];
    }
}
