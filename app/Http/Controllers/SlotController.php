<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Services\SlotService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class SlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Slot::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAvailableSlotTimes()
    {
        //TODO: This needs to be cached
        // Leaving it like this so it doesn't affect the demo
        return SlotService::generateAvailableSlotTimes();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Slot::upsert(
            $request->input('slots'),
            ['day'],
            ['from', 'to', 'step', 'off']
        );

        return response()->json();
    }
}
