<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id'   =>  random_int(1,20),
            'phone' =>  $this->faker->phoneNumber,
            'password' => '$2y$10$JTKFLbNHCXxl1XpmvaFUZ.hLLXDvPkxGrleTrAPAyY9q6sg.DISnO', // password
            'name'  =>  $this->faker->firstName,
            'surname'   =>  $this->faker->lastName,
            'date'  =>  Carbon::today()->subDays(random_int(0, 2000)),
            'iin'   =>  $this->faker->numerify('############'),
            'avatar'    =>  'avatar/' . $this->faker->numerify('######'),
            'access_token'  =>  mb_strtoupper(Str::random(40)),
            'code'      =>  11111,
            'promocode' =>  mb_strtoupper(Str::random(5)),
            'actived'   =>  true,
            'phone_verified'    =>  Carbon::now(),
            'created_at'    =>  Carbon::now(),
            'updated_at'    =>  Carbon::now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
