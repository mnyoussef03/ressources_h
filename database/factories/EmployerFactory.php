<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'registration_number' => $this->faker->numberBetween(20,300),
                'firstName' => $this->faker->firstName(),
                'lastName' => $this->faker->lastName(),
                'departement' =>$this->faker->word(),
                'hire_date' => $this->faker->date(),
                'phone' => $this->faker->numberBetween(),
                'adress'   => $this->faker->address(),
                'city' => $this->faker->city(),
            //
        ];
    }
}
