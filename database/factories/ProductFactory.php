<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jenis' => fake()->randomElement(['meja', 'kursi', 'laptop', 'printer', 'kabel']),
            'kondisi' => fake()->randomElement(['baik', 'layak', 'rusak']),
            'keterangan' => fake()->text(200),
            'kecacatan' => fake()->text(200),
            'jumlah' => fake()->randomDigit()
        ];
    }
}
