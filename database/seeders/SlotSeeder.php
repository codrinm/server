<?php

namespace Database\Seeders;

use App\Models\Slot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $available_slots = [
            [
                'day'   => 'Monday',
                'from'  => '09:00',
                'to'    => '17:00',
                'off'   => false,
            ],
            [
                'day'   => 'Tuesday',
                'from'  => '09:00',
                'to'    => '17:00',
                'off'   => false,
            ],
            [
                'day'   => 'Wednesday',
                'from'  => '09:00',
                'to'    => '17:00',
                'off'   => false,
            ],
            [
                'day'   => 'Thursday',
                'from'  => '09:00',
                'to'    => '17:00',
                'off'   => false,
            ],
            [
                'day'   => 'Friday',
                'from'  => '09:00',
                'to'    => '17:00',
                'off'   => false,
            ],
            [
                'day'   => 'Saturday',
                'from'  => '10:00',
                'to'    => '15:00',
                'off'   => true,
            ],
            [
                'day'   => 'Sunday',
                'from'  => '10:00',
                'to'    => '15:00',
                'off'   => true,
            ],
        ];

        Slot::insert($available_slots);
    }
}
