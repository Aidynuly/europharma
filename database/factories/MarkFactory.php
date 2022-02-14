<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $marks = ['Audi', 'Honda', 'Toyota', 'BMW', 'Mercedes'];

        return [
            'name'  =>  $marks[random_int(0,4)],
        ];
    }
}
