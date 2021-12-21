<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $infoBooking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($infoBooking)
    {
        $this->infoBooking = $infoBooking;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hóa đơn đặt lịch')->view('admin.emails.bookingMail');
    }
}
