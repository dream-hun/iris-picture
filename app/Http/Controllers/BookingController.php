<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Booking;
use App\Enums\BookingStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function create()
    {
        $services = Service::all();
        return view('clients.booking', compact('services'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_id' => 'required|exists:services,id',
            'date' => 'required|date|after_or_equal:today',
            'time' => [
                'required',
                'date_format:H:i',
                function ($attribute, $value, $fail) {
                    $hour = (int) substr($value, 0, 2);
                    if ($hour < 9 || $hour >= 17) {
                        $fail('Please select a time between 9:00 AM and 5:00 PM.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $booking = Booking::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'service_id' => $request->service_id,
                'date' => $request->date,
                'time' => $request->time,
                'status' => BookingStatus::PENDING,
            ]);

            // You might want to send confirmation email here
            
            return redirect()
                ->back()
                ->with('success', 'Your booking has been submitted successfully! We will contact you shortly to confirm your appointment.');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withErrors(['error' => 'There was an error processing your booking. Please try again.'])
                ->withInput();
        }
    }
}
