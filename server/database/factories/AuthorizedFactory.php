<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Authorized>
 */
class AuthorizedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'document_number' => $this->faker->unique()->numerify('##########'),
            'phone' => $this->faker->phoneNumber,
            'photo' => 'user.png',
            'tutor_id' => null,
        ];
    }
}
