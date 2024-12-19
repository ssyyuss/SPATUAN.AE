<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;


class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    return [
        'name' => $this->faker->sentence,
        'email' => $this->faker->email,
        'phone' => $this->faker->phoneNumber,
        'message' => $this->faker->paragraph,
    ];
    }
}
