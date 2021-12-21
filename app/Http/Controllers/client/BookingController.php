<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Mail\BookingMail;
use App\Models\AdminAuth;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    
    public function store(Request $request)
    {
        // $request->validate([
        //     'full_name' => 'required',
        //     'email' => 'required',
        //     'persons' => 'required',
        //     'phone' => 'required',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'message' => 'required',
        // ]);
        // $booking = new Booking();
        // $request->date = date('Y-m-d', strtotime($request->date));
        // $booking->fill($request->all()); 
        // $booking->fill(['date' => $request->date]);
        // $emailAdmin = AdminAuth::all();
        // $booking->save();
        // Mail::to($emailAdmin->email)->send(new BookingMail());
        // return redirect()->route('home');
    }
}
