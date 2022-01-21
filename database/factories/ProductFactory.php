<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'point_id'  =>  random_int(1,250),
            'name'      =>  mb_strtoupper(Str::random(20)),
            'code'      =>  mb_strtolower(Str::random(15)),
        ];
    }
}
