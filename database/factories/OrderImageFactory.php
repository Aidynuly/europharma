<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'  =>  $order = random_int(1, 50),
            'path'  =>  'img/' . $order . random_int(1, 10),
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
