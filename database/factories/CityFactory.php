<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  =>  $this->faker->city,
            'country_id'    =>  random_int(1, 5),
            'created_at'    =>  Carbon::now(),
            'updated_at'    =>  Carbon::now(),
        ];
    }
}
