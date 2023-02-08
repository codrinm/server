<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\VehicleMake;
use App\Models\VehicleModel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: This needs to be cached
        // Leaving it like this so it doesn't affect the demo
        $bookings_count = Booking::count();
        $vehicle_makes_count = VehicleMake::count();
        $vehicle_models_count = VehicleModel::count();

        return response()->json([
            'bookings_count' => $bookings_count,
            'vehicle_makes_count' => $vehicle_makes_count,
            'vehicle_models_count' => $vehicle_models_count,
        ]);
    }
}
