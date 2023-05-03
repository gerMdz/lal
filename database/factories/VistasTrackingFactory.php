<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VistasTrackingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text()
        ];
    }
}
