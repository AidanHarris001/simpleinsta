<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'forename' => $this->faker->firstname(),
            'surname' => $this->faker->lastname(),
            'date_of_birth' => $this->faker->date(),
            'bio' => $this->faker->sentence($nbWords = 6, $variableNbWords = true)
        ];
    }
}
