<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Professeur>
 */
class ProfesseurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nom' => $this->faker->name(),
            'postnom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'fonction' => $this->faker->word,
            'description' => $this->faker->sentence,
            'image' => 'images/Pr.MBaki.jpg',
            'titre' => $this->faker->word,
            //
        ];
    }
}