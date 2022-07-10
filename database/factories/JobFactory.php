<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::Factory(), //creates any random user
            'category_id' => Category::Factory(),
            'title' => $this->faker->sentence,
            'company' => $this->faker->company,
            'slug' => $this->faker->slug,
            'location' => $this->faker->address,
            'salary' => $this->faker->randomElement([300, 400, 500, 600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500]),
            'description' => $this->faker->sentence,
            'requirements' => $this->faker->sentence,
            'benefits' => $this->faker->sentence,
            'body' => $this->faker->paragraph
        ];
    }
}
