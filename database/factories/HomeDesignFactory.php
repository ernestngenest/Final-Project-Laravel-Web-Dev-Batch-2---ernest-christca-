<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HomeDesign>
 */
class HomeDesignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_count = \App\Models\Category::count();
        return [
            'category_id' => $this->faker->randomNumber(1, $category_count),
            'home_design_quantity' => $this->faker->randomNumber(3, 1000),
            'home_design_name' => $this->faker->name(),
            'home_design_description' => $this->faker->paragraph(10, mt_rand(10, 30)),
            'home_design_image' => $this->faker->imageUrl(),
            'home_design_sold' => $this->faker->numberBetween(0, 1000),
            'home_design_status' => $this->faker->randomElement(['Active', 'Disable']),
            'home_design_price' => $this->faker->numberBetween(10000000),
            'last_update' => now(),
        ];
    }
}
