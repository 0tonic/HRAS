<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\superadminController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile/change-password', [ProfileController::class, 'changepassword'])->name('profile.change-password');
    Route::put('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::get('/blank-page', [HomeController::class, 'blank'])->name('blank');

    Route::get('/superadmin', [superadminController::class, 'index'])->name('superadmin.index')->middleware('superadmin');
    Route::get('/superadmin/edit/{id}', [superadminController::class, 'edit'])->name('superadmin.edit')->middleware('superadmin');
    Route::put('/superadmin/update/{id}', [superadminController::class, 'update'])->name('superadmin.update')->middleware('superadmin');
    Route::delete('/superadmin/delete/{id}', [superadminController::class, 'destroy'])->name('superadmin.delete')->middleware('superadmin');

    Route::get('/table-example', [ExampleController::class, 'table'])->name('table.example');
    Route::get('/clock-example', [ExampleController::class, 'clock'])->name('clock.example');
    Route::get('/chart-example', [ExampleController::class, 'chart'])->name('chart.example');
    Route::get('/form-example', [ExampleController::class, 'form'])->name('form.example');
    Route::get('/map-example', [ExampleController::class, 'map'])->name('map.example');
    Route::get('/calendar-example', [ExampleController::class, 'calendar'])->name('calendar.example');
    Route::get('/gallery-example', [ExampleController::class, 'gallery'])->name('gallery.example');
    Route::get('/todo-example', [ExampleController::class, 'todo'])->name('todo.example');
    Route::get('/contact-example', [ExampleController::class, 'contact'])->name('contact.example');
    Route::get('/faq-example', [ExampleController::class, 'faq'])->name('faq.example');
    Route::get('/news-example', [ExampleController::class, 'news'])->name('news.example');
    Route::get('/about-example', [ExampleController::class, 'about'])->name('about.example');
});
