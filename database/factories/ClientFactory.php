<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory, App\Models\Client;;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
