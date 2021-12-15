<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'account_id' => $this->faker->numberBetween(1,11),
        ];
    }
}
