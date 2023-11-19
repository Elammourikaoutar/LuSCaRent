<?php

namespace Database\Factories;
use App\Models\Command;
use App\Models\User;
use App\Models\Car;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' =>User::factory(),
            'car_id' =>Car::factory(),
            'dateL' => $this->faker->dateTime(),
            'dateR' => $this->faker->dateTime(),
            'prixTTC' => $this->faker->randomDigit(1000,5000),
            'notes' => $this->faker->text(),
        ];
    }
}
