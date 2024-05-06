<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gudang>
 */
class GudangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_gudang' => 'GD-0' . $this->faker->unique()->numberBetween(1, 20),
            'name_gudang' => $this->faker->name(),
            'alamat_gudang' => $this->faker->address()
        ];
    }
}
