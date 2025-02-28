<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\booking;
class BookingController extends Controller
{
    //

    // Get all bookings
    public function index() {
        $bookings = Booking::all();
        return response()->json($bookings,201);
    }

    // Create a new booking
    public function store(Request $request) {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'yacht_id' => 'required|exists:yachts,id',
            'package_id' => 'required|exists:packages,id',
            'booking_date' => 'required|date',
            'status' => 'required|in:pending,confirmed,cancelled',
        ]);

        $booking = Booking::create($validated);
        return response()->json($booking, 201);
    }

    // Update an existing booking
    public function update(Request $request, $id) {
        $booking = Booking::findOrFail($id);
        $validated = $request->validate([
            'user_id' => 'exists:users,id',
            'yacht_id' => 'exists:yachts,id',
            'package_id' => 'exists:packages,id',
            'booking_date' => 'date',
            'status' => 'in:pending,confirmed,cancelled',
        ]);

        $booking->update($validated);
        return response()->json($booking);
    }

    // Delete a booking
    public function destroy($id) {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(null, 204);
    }
}


