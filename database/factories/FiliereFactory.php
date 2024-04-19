<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Filiere>
 */
class FiliereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement(
                [
                    'Informatique', 
                    'Génie mécanique', 
                    'Gestion des affaires', 
                    'Sciences politiques',
                    'Finance', 
                    'Biologie', 
                    'Architecture', 
                    'Médecine',
                    'Langues étrangères', 
                    'Design graphique',
                ]),

            'department_id' => function() {
                return Department::factory();
            }
            ];
        }
}