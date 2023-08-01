<?php

namespace Database\Factories;

use Faker\Provider\Lorem;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip' => '12345',
            'phone' => $this->faker->phoneNumber(),
            'status' => 'A',
            'message' => 'wherever',
            'user_id' => 1,
        ];
    }
}
