<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'account_id' => $this->faker->numberBetween(1,10),
            'post_id' => $this->faker->numberBetween(1,30),
        ];
    }
}
