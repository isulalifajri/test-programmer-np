<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->numberBetween(10000, 999999);

        return [
            'kode_barang' => 'BR-0' . $this->faker->unique()->numberBetween(1, 20),
            'nama_barang' => $this->faker->words(2, true),
            'qty' => 1,
            'satuan' => 'pcs',
            'harga' => $price,
            'discount' => $price * 0.25,
            'description' => $this->faker->sentence(),
        ];
    }
}
