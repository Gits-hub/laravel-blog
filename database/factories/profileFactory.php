<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class profileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'names' =>fake('en_KE')->name(),
            'status' =>fake()->randomElement(['Single', 'Dating', 'Engaged', 'Married', 'Divorced', 'Widowed']),
            'nationality' => fake('en_KE')->county(),
            'height' => fake()->regexify("^[4-8]{1}'[0-9][01]$"),
            'weight' => fake()->regexify('^[4-9][0-9]$'),
            'age' => fake()->regexify('^[2-9][0-9]$'),
            'disability' =>fake()->randomElement(['NA', 'Visually Impaired', 'Deaf', 'Blind', 'Physically handicapped','Neuro-divergent'])
        ];
    }
}
