<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'  =>  random_int(1,50),
            'name'      =>  $this->faker->name,
            'address'   =>  $this->faker->address,
            'date'      =>  Carbon::today()->subDays(random_int(0, 2000)),
        ];
    }
}
