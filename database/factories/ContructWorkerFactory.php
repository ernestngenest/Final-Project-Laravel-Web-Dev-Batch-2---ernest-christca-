<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ContructWorkerFactory extends Factory
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
            'construct_worker_name' => $this->faker->name(),
            'construct_worker_description' => $this->faker->text(),
            'construct_worker_image' => $this->faker->imageUrl(),
            'construct_worker_price' => $this->faker->numberBetween(100000),
            'construct_worker_quantity' => $this->faker->randomnumber(1, 1000),
            'last_update' => now(),
        ];
    }
}
