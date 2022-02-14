<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $models = [
            'First Ml',
            'Second Ml',
            'Third Ml',
            'Fourth Ml',
            'Fifth Ml',
        ];

        return [
            'mark_id'   =>  random_int(1,5),
            'name'  =>  $models[random_int(0,4)],
        ];
    }
}
