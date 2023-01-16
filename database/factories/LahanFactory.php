<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LahanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'paket_tanam_id' => $this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 5),
            'nama' => $this->faker->name,
            'status' => $this->faker->randomElement(['aktif', 'nonaktif']),
            'luas' => $this->faker->randomNumber(2),
            'daerah' => $this->faker->address,
        ];
    }
}
