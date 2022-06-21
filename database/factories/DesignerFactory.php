<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Designer>
 */
class DesignerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'designer_name' => $this->faker->name(),
            'designer_username' => $this->faker->userName(),
            'designer_password' => $this->faker->password(),
            'designer_email' => $this->faker->unique()->safeEmail(),
            'designer_phone' => $this->faker->phoneNumber(),
            'designer_address' => $this->faker->address(),
            'designer_image' => $this->faker->imageUrl(),
            'last_login' => now(),
        ];
    }
}
