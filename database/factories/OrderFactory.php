<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'   =>  $this->faker->text(50),
            'from_city_id'  =>  $from_city = random_int(1, 20),
            'to_city_id'    =>  $to_city = random_int(1, 20),
            'from'      =>  City::whereId($from_city)->value('name'),
            'to'        =>  City::whereId($to_city)->value('name'),
            'from_lat'  =>  random_int(1, 10000),
            'from_long'  =>  random_int(1, 10000),
            'to_lat'  =>  random_int(1, 10000),
            'to_long'  =>  random_int(1, 10000),
            'status'    =>  Order::STATUS_SEND,
            'employee_id'   =>  random_int(1, 10),
            'start_date'    =>  $this->faker->date,
            'end_date'      =>  $this->faker->date,
            'payment'       =>  $this->faker->randomElement(['cash', 'card']),
            'price'         =>  random_int(10000, 100000),
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
