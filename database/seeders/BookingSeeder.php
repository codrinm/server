<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookings = [
            [
                'name' => 'Mike Tomson',
                'email' => 'miket@test.com',
                'phone' => '07455555555',
                'date' => now()->subDays(1)->format('Y-m-d'),
                'time' => '09:00:00',
                'vehicle_make_id' => 3,
                'vehicle_model_id' => 1
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@test.com',
                'phone' => '07411111111',
                'date' => now()->format('Y-m-d'),
                'time' => '10:00:00',
                'vehicle_make_id' => 1,
                'vehicle_model_id' => 1
            ],
            [
                'name' => 'Robert Smith',
                'email' => 'rsmith@test.com',
                'phone' => '07422222222',
                'date' => now()->addDays(1)->format('Y-m-d'),
                'time' => '12:00:00',
                'vehicle_make_id' => 2,
                'vehicle_model_id' => 1
            ],
            [
                'name' => 'Mark Jones',
                'email' => 'mjones@test.com',
                'phone' => '07499999999',
                'date' => now()->addDays(2)->format('Y-m-d'),
                'time' => '15:00:00',
                'vehicle_make_id' => 4,
                'vehicle_model_id' => 2
            ],
            [
                'name' => 'Jack Keller',
                'email' => 'jkeller@test.com',
                'phone' => '07499999999',
                'date' => now()->addDays(2)->format('Y-m-d'),
                'time' => '16:00:00',
                'vehicle_make_id' => 3,
                'vehicle_model_id' => 2
            ],
        ];

        Booking::insert($bookings);
    }
}
