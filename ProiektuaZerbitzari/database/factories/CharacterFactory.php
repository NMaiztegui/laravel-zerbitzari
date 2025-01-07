<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class characterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $houses = \App\Models\House::pluck('id')->toArray(); // coge un array con los id de las casas
        return [
            //
          
                'actor' => $this->faker->sentence,
                'name' => $this->faker->sentence,
                'description' => $this->faker->text(200),
                'house_id' => $this->faker->randomElement($houses), // adjunta de menera aleatoria el character a un id de la casa
                
               
        ];
    }
}
