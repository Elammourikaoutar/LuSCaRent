<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marque' => $this->faker->company,
            'model' => $this->faker->year(),
            'type' =>$this->faker->word,
            'prixJ' =>$this->faker->randomNumber(), 
            'dispo' =>$this->faker->numberBetween(0,1),
            'comment' => $this->faker->text(),

        ];
    }
}
