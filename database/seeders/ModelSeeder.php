<?php

namespace Database\Seeders;

use App\Models\MarkModel;
use App\Models\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MarkModel::factory()->times(25)->create();
    }
}
