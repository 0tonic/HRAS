<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function checkIn()
    {
        // Your check-in logic here
        return view('UserCheckIn');  // Or any other logic
    }
    public function adminlogin()
    {
        // Your check-in logic here
        return view('auth.login');  // Or any other logic
    }
}
