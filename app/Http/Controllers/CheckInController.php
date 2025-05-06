<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckIn;
use Illuminate\Support\Facades\Storage;

class CheckInController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|string',
            'name' => 'required|string',
            'department' => 'required|string',
            'image' => 'required|image|max:2048',
        ]);

        $imagePath = $request->file('image')->store('checkin_images', 'public');

        $now = now();
        $timeIn = $now->format('H:i:s');
        $date = $now->toDateString();

        $status = $now->format('H:i:s') <= '08:15:00' ? 'On Time' : 'Late';

        CheckIn::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'department' => $request->department,
            'image' => $imagePath,
            'time_in' => $timeIn,
            'date' => $date,
            'status' => $status,
        ]);

        return redirect()->back()->with('success', 'Check-in recorded successfully.');
    }

    public function index()
    {
        $checkIns = CheckIn::orderBy('created_at', 'desc')->get();
        return view('time-in', compact('checkIns'));
    }
}
