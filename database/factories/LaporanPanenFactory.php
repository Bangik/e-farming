<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LaporanPanenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lahan_id' => 2,
            'nama' => $this->faker->name,
            'jumlah' => $this->faker->randomNumber(2),
            'satuan' => $this->faker->randomElement(['kg', 'liter', 'buah']),
            'harga' => $this->faker->randomNumber(5),
            'created_at' => $this->faker->dateTimeBetween('-1 year', '+1 year'),
        ];
    }
}
