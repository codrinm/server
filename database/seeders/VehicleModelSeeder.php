<?php

namespace Database\Seeders;

use App\Models\VehicleModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicle_models = [
            // AUDI
            [
                'vehicle_make_id' => 1,
                'model' => 'A3'
            ],
            [
                'vehicle_make_id' => 1,
                'model' => 'A4'
            ],
            [
                'vehicle_make_id' => 1,
                'model' => 'A4 Quattro'
            ],
            [
                'vehicle_make_id' => 1,
                'model' => 'A6'
            ],
            [
                'vehicle_make_id' => 1,
                'model' => 'TT'
            ],

            // BMW
            [
                'vehicle_make_id' => 2,
                'model' => '320'
            ],
            [
                'vehicle_make_id' => 2,
                'model' => '530'
            ],
            [
                'vehicle_make_id' => 2,
                'model' => '740'
            ],
            [
                'vehicle_make_id' => 2,
                'model' => 'X5'
            ],
            [
                'vehicle_make_id' => 2,
                'model' => 'Z3'
            ],

            // Ford
            [
                'vehicle_make_id' => 3,
                'model' => 'Courier'
            ],
            [
                'vehicle_make_id' => 3,
                'model' => 'E-250'
            ],
            [
                'vehicle_make_id' => 3,
                'model' => 'Escape'
            ],
            [
                'vehicle_make_id' => 3,
                'model' => 'Fiesta'
            ],
            [
                'vehicle_make_id' => 3,
                'model' => 'Focus'
            ],

            // Kia
            [
                'vehicle_make_id' => 4,
                'model' => 'Optima'
            ],
            [
                'vehicle_make_id' => 4,
                'model' => 'Picanto'
            ],
            [
                'vehicle_make_id' => 4,
                'model' => 'Sportage'
            ],

            // Mercedes
            [
                'vehicle_make_id' => 5,
                'model' => 'CL500'
            ],
            [
                'vehicle_make_id' => 5,
                'model' => 'CLK320'
            ],
            [
                'vehicle_make_id' => 5,
                'model' => 'E320'
            ],
            [
                'vehicle_make_id' => 5,
                'model' => 'E55 AMG'
            ],
            [
                'vehicle_make_id' => 5,
                'model' => 'ML430'
            ],
            [
                'vehicle_make_id' => 5,
                'model' => 'SLK320'
            ],
        ];

        VehicleModel::insert($vehicle_models);
    }
}
