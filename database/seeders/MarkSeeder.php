<?php

namespace Database\Seeders;

use App\Models\Mark;
use App\Models\MarkModel;
use Database\Factories\MarkModelFactory;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mark::factory()->times(5)->create();
    }
}
