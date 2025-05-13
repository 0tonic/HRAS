<?php

namespace App\Http\Controllers;
use App\Models\CheckIn;

use Illuminate\Http\Request;

class HRController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

// hr modules routes





public function timein()
{
    $data = CheckIn::latest()->get();

    return view('layouts.time-in', compact('data'));
}

  
}