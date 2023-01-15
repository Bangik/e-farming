<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class alat_bahanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kategori' => $this->faker->randomElement(['Alat', 'Bahan', 'Obat']),
            'nama' => $this->faker->name,
            'satuan' => $this->faker->randomElement(['Kg', 'L', 'Pcs']),
            'stok' => $this->faker->numberBetween(1, 100),
            'harga' => $this->faker->numberBetween(1000, 1000000)
        ];
    }
}
