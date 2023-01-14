<?php

namespace Database\Factories;

use App\Models\Realisateur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'description' => $this->faker->text(),
            'prix' => rand(1000, 2000),
            'realisateur_id ' => Realisateur::factory()->create(),
            'categorie_id  ' => rand(1, 2),
            'img' => 'pirate_de_caraibe.jpg',
        ];
    }
}
