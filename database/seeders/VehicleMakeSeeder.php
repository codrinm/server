<?php

namespace Database\Seeders;

use App\Models\VehicleMake;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleMakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle_makes = [
            ['make' => 'Audi'],
            ['make' => 'BMW'],
            ['make' => 'Ford'],
            ['make' => 'Kia'],
            ['make' => 'Mercedes'],
        ];

        VehicleMake::insert($vehicle_makes);
    }
}
