<?php

namespace App\Http\Controllers;

use App\Http\Requests\Booking\StoreBookingRequest;
use App\Jobs\SendBookingConfirmationEmail;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bookings = Booking::query();

        // Filter by date if present
        if ($request->query('date')) {
            $bookings->where('date', $request->query('date'));
        }

        return $bookings->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Booking\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        $booking = Booking::create($request->validated());

        // Send booking confirmation emails
        dispatch(new SendBookingConfirmationEmail($booking));

        return $booking;
    }
}
