<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'   =>  random_int(1, 100),
            'doc_number'    =>  $doc = $this->faker->numerify('########'),
            'deadline'  =>  Carbon::today()->subDays(random_int(1000, 4017)),
            'image_1'   =>  'img/' .  $doc . '-1',
            'image_2'   =>  'img/' .  $doc . '-2',
            'person_image'   =>  'img/' .  $doc . '-person',
            'created_at'    =>  now(),
            'updated_at'    =>  now(),
        ];
    }
}
