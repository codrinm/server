<?php

namespace App\Jobs;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendBookingConfirmationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $booking;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Sends booking confirmation email to owner and user
     *
     * @return void
     */
    public function handle()
    {
        $email = new BookingConfirmation($this->booking);
        $recipients = [config('constants.booking_confirmation_email'), $this->booking->email];
        Mail::to($recipients)->send($email);
    }
}
