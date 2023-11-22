<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index()
    {
        $events = array();
        $bookings = Booking::all();

        foreach ($bookings as $booking) {
            $events[] = [
                'title' => $booking->title,
                'start' => \Carbon\Carbon::parse($booking->start_date)->setTimezone('Europe/Madrid')->toIso8601String(),
                'end' => \Carbon\Carbon::parse($booking->end_date)->setTimezone('Europe/Madrid')->toIso8601String(),
            ];
        }
        return view('Calendario', ['events' => $events]);
    }


    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required|string'
        ]);
        return 'pass';
    }

}
