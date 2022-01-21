<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountrySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(CarSeeder::class);
        $this->call(UserSeeder::class);         // 100 users
        $this->call(TransportSeeder::class);
        $this->call(UserDocumentSeeder::class);
        $this->call(EmployeeSeeder::class);     // 10 employee
        $this->call(OrderSeeder::class);        //  50 orders
        $this->call(OrderImageSeeder::class);
        $this->call(PointSeeder::class);        // 250 points
        $this->call(ProductSeeder::class);
    }
}
