<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName(),
            'first_name' => $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail(),
            'tel' => $this->faker->randomElement([
                $this->faker->numerify('0#0########'),
                $this->faker->numerify('0#########'),
            ]),
            'address' => $this->faker->prefecture() . $this->faker->city() . $this->faker->streetAddress(),
            'building' => $this->faker->randomElement([
                $this->faker->secondaryAddress(),
                '',
            ]),
            'category_id' => $this->faker->numberBetween(1, 5),
            'detail' => $this->faker->realText(),
        ];
    }
}
