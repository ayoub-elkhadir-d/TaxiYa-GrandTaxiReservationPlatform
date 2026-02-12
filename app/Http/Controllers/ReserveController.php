<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function getSeats($id)
    {
        $takenSeats = Reservation::where('trip_id', $id)
            ->where('status', 'confirmed')
            ->pluck('seat')
            ->toArray();

        return view('traveler.confirm', compact('takenSeats'));
    }

}
