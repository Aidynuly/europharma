<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id'   =>  random_int(1, 20),
            'name'  =>  $this->faker->firstName,
            'surname'   =>  $this->faker->lastName,
            'token' =>  Str::random(40),
            'phone' =>  $this->faker->phoneNumber,
            'password'  =>  '$2y$10$JTKFLbNHCXxl1XpmvaFUZ.hLLXDvPkxGrleTrAPAyY9q6sg.DISnO',
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
