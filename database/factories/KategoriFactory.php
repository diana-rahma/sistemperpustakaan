<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori' => $this->faker->sentence(),
            'file' => $this->faker->image(null, 250, 250, 'genre', true)
        ];
    }
}
