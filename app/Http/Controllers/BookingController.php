<?php

namespace App\Http\Controllers;

use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('clients.booking');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'message' => 'required',
        ]);

        $booking = Booking::create($data);
    }
}
