<?php

namespace Database\Factories;

use Exception;
use App\Models\Category;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_count = \App\Models\Category::count();
        return  [
            'category_id' => $this->faker->randomNumber(1, $category_count),
            'material_name' => $this->faker->name(),
            'material_description' => $this->faker->paragraph(3, mt_rand(3, 7)),
            'material_image' => $this->faker->imageUrl(500, 500),
            'material_price' => $this->faker->numberBetween(100000, 2147483647),
            'material_quantity' => $this->faker->numberBetween(100000, 2147483647),
            'last_update' => now(),
        ];
    }
}
