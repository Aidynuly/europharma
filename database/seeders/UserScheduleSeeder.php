<?php

namespace Database\Seeders;

use App\Models\UserSchedule;
use Illuminate\Database\Seeder;

class UserScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSchedule::factory()->times(200)->create();
    }
}
