<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   =>  random_int(1,100),
            'schedule_id'   =>  random_int(1,100),
        ];
    }
}
