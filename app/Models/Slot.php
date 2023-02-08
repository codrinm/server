<?php

namespace App\Models;

use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $casts = [
        'off' => 'boolean'
    ];

    public function getTimeSlotsAttribute()
    {
        $slot_times = CarbonInterval::minutes($this->step)->toPeriod($this->from, $this->to)->toArray();
        return array_map(fn ($slot_times) => $slot_times->format('H:i'), $slot_times);
    }
}
