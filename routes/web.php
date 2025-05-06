<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\superadminController;

use App\Http\Controllers\CheckInController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('UserCheckIn', [HomeController::class, 'checkIn'])->name('UserCheckIn');
Route::get('/auth/login', [HomeController::class, 'adminlogin'])->name('login');

Route::get('/time-in', [CheckInController::class, 'index'])->name('timein.index');
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

    Route::get('/blank-page', [HRController::class, 'blank'])->name('blank');
    Route::get('/time-in', [HRController::class, 'timein'])->name('timein');


    Route::get('/table-example', [HRController::class, 'table'])->name('table.example');
    Route::get('/clock-example', [HRController::class, 'clock'])->name('clock.example');
    Route::get('/chart-example', [HRController::class, 'chart'])->name('chart.example');
    Route::get('/form-example', [HRController::class, 'form'])->name('form.example');
    Route::get('/map-example', [HRController::class, 'map'])->name('map.example');
    Route::get('/calendar-example', [HRController::class, 'calendar'])->name('calendar.example');
    Route::get('/gallery-example', [HRController::class, 'gallery'])->name('gallery.example');
    Route::get('/todo-example', [HRController::class, 'todo'])->name('todo.example');
    Route::get('/contact-example', [HRController::class, 'contact'])->name('contact.example');
    Route::get('/faq-example', [HRController::class, 'faq'])->name('faq.example');
    Route::get('/news-example', [HRController::class, 'news'])->name('news.example');
    Route::get('/about-example', [HRController::class, 'about'])->name('about.example');
});
