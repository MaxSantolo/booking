<?php

namespace App\Mail;

use App\Booking;
use App\BookingOptional;
use App\Room;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Barryvdh\DomPDF\Facade as PDF;;

class EmailBookingVerification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $optional;
    public $room;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Booking $booking, BookingOptional $optional, Room $room)
    {
        $this->booking = $booking;
        $this->optional = $optional;
        $this->room = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.booking-confirmation')
            ->from(config('mail.from'))
            ->subject(config('app.name') . ' - Booking Online');
    }



}
