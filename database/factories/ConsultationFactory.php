<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->,
            'time',
            'full_name',
            'pet_name',
            'contact_number'
        ];
    }
}
