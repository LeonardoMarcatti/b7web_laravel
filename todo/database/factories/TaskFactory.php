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

        $category =  Category::all()->random();

        return [
            'done' => $this->faker->boolean(),
            'description' => $this->faker->text(50),
            'date' => $this->faker->dateTime(),
            'title' => $this->faker->text(10),
            'category_id' => $category,
            'user_id' => $category->user
        ];
    }
}
