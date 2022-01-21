<?php

namespace Database\Factories;

use App\Models\Transport;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_id'    =>  random_int(1, 20),
            'user_id'   =>  random_int(1, 100),
            'car_date'  =>   $date = Carbon::today()->subDays(random_int(365, 11000)),
            'dimensions'    =>  random_int(0.3, 10),
            'number'    =>  mb_strtoupper(Str::random(5)),
            'image' =>  'img/' . $date,
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
