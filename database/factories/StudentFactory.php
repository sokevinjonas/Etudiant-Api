<?php

namespace Database\Factories;
use App\Models\Filiere;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = Student::class;
    
    public function definition(): array
    {   
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'numero_etudiant' => Str::random(10), // Génère une chaîne de caractères aléatoire de longueur 10
            'date_naissance' => $this->faker->date(),
            'genre' => $this->faker->randomElement(['masculin', 'féminin']),
            'filiere_id' => function() {
                return Filiere::factory();
            },
        ];
    }
}