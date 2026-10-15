<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['X', 'XI', 'XII']) . ' ' . fake()->randomElement(['PPLG', 'TJKT', 'DKV']) . ' ' . fake()->numberBetween(1, 3),
            'major' => fake()->randomElement(['Pengembangan Perangkat Lunak dan Gim', 'Teknik Jaringan Komputer dan Telekomunikasi', 'Desain Komunikasi Visual']),
        ];
    }
}
