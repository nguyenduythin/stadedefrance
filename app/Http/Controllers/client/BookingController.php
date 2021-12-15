<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'persons' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'message' => 'required',
        ]);
        $booking = new Booking();
        $request->date = date('Y-m-d', strtotime($request->date));
        $booking->fill($request->all()); 
        $booking->fill(['date' => $request->date]);
        $booking->save();
        
        return redirect()->route('home');
    }
}
