<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cars = [
            'Toyota', 'Nissan', 'Mercedes', 'Hyundai', 'Kia', 'Jeep', 'BMW'
        ];
        $models = [
            'Camry', 'Qashqai', 'C200', 'Accent', 'Rio', 'Cerato', '520'
        ];

        return [
            'name'  =>  $name = $cars[random_int(0, 6)] . ' ' .  $models[random_int(0,6)],
            'icon'  =>  'drc/icon-' . $name . '-' . random_int(500, 1000),
            'created_at'    =>  Carbon::now(),
            'updated_at'    =>  Carbon::now(),
        ];
    }
}
