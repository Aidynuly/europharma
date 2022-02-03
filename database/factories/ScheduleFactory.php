<?php

namespace Database\Factories;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'day'   =>  $date = Carbon::today()->subDays(random_int(365, 11000)),
            'from'  =>  $from = $date->subHours(random_int(1,24)),
            'to'    =>  $from->addHours(2),
            'empty' =>  true,
        ];
    }
}
