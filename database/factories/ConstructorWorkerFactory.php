<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConstructorWorker>
 */
class ConstructorWorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $category_count = Category::count();
        return [
            'category_id' => $this->faker->randomNumber(1, $category_count),
            'constructor_worker_name' => $this->faker->name(),
            'constructor_worker_description' => $this->faker->text(),
            'constructor_worker_image' => $this->faker->imageUrl(),
            'constructor_worker_price' => $this->faker->numberBetween(10000),
            'constructor_worker_quantity' => $this->faker->randomNumber(7),
            'last_update' => now(),
        ];
    }
}
