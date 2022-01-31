<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $statuses = ['accepted', 'in_process', 'declined'];
        return [
            'order_id'  =>  random_int(1,50),
            'user_id'   =>  random_int(1,100),
            'status'    =>  $statuses[random_int(0,2)],
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
