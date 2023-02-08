<?php

namespace App\Services;

use App\Models\BlockedDay;
use App\Models\Slot;
use App\Models\Booking;
use Carbon\CarbonPeriod;

class SlotService
{
    /**
     * Generate an array with all available time slots for each day,
     * for the required period.
     */
    public static function generateAvailableSlotTimes(int $days = 6): array
    {
        $available_times = [];

        $period = CarbonPeriod::create(now(), now()->addDays($days));

        foreach ($period as $date) {
            $day = $date->format('l');
            $db_slots = Slot::where('day', $day)->first();

            // If the slot is OFF in db, we don't need to generate the time slots
            $time_slots = !$db_slots->off ? $db_slots->timeSlots : [];

            $current_bookings = Booking::where('date', $date->toDateString())->pluck('time')->map(
                fn ($time) => $time->format('H:i')
            )->toArray();

            $available_time_slots = array_values(array_diff($time_slots, $current_bookings));

            $available_times[] = [
                'day' => $day,
                'date' => $date->format('Y-m-d'),
                'nice_date' => $date->format('d M'),
                'time_slots' => $available_time_slots,
                'off' => $db_slots->off
            ];
        }

        // Check and add blocked days
        $blocked_days = BlockedDay::where('date', '>', now()->format('Y-m-d'))->pluck('date')->toArray();

        foreach ($available_times as $k => $time) {
            if (in_array($time['date'], $blocked_days)) {
                $available_times[$k]['off'] = true;
            }
        }

        return $available_times;
    }
}
