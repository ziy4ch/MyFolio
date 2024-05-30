<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matric_id'=>fake()->unique()->numberBetween($min = 2210000, $max = 2219999),
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->freeEmail(),
            'phone_no'=>fake()->phoneNumber(),
            'created_at'=>fake()->dateTime(),
            'updated_at'=>fake()->dateTime(),
        ];
    }
}
