<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\superadminController;

use App\Http\Controllers\TimeInController;  

use App\Http\Controllers\CheckInController;



// Route::get('/time-in', [TimeInController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('UserCheckIn', [HomeController::class, 'checkIn'])->name('UserCheckIn');
Route::get('/auth/login', [HomeController::class, 'adminlogin'])->name('login');

// Route::get('/time/in/hello', [CheckInController::class, 'index'])->name('timein.index');
Route::post('/check-in', [CheckInController::class, 'store'])->name('checkin.store');

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'changepassword'])->name('profile.change-password');
    Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    
    Route::get('/superadmin', [superadminController::class, 'index'])->name('superadmin.index')->middleware('superadmin');
    Route::get('/superadmin/edit/{id}', [superadminController::class, 'edit'])->name('superadmin.edit')->middleware('superadmin');
    Route::put('/superadmin/update/{id}', [superadminController::class, 'update'])->name('superadmin.update')->middleware('superadmin');
    Route::delete('/superadmin/delete/{id}', [superadminController::class, 'destroy'])->name('superadmin.delete')->middleware('superadmin');

    Route::get('/time-in', [HRController::class, 'timein'])->name('timein');


});
