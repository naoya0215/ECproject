<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => $this->faker->numberBetween(1, 2),
            'name' => $this->faker->name,
            'information' => $this->faker->realText(),
            'price' => $this->faker->numberBetween(10, 100),
            'secondary_category_id' => $this->faker->numberBetween(1, 2),
            'image' => $this->faker->numberBetween(1, 2),
        ];
    }
}
