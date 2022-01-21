<?php

namespace Database\Seeders;

use App\Models\OrderImage;
use Illuminate\Database\Seeder;

class OrderImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderImage::factory()->times(100)->create();
    }
}
