<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone'=>fake()->numberBetween(1, 10000000),
            'password' => Hash::make('password'),
            'address'=>fake()->sentence(),
            'date_of_birth'=>fake()->date(),
            'years_of_experinces'=>fake()->numberBetween(1, 20),
            'number_of_licence'=>fake()->numberBetween(1234, 5678),
            'major_id'=>fake()->numberBetween(1, 100)

        ];
    }
}
