<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/academics', 'pages.academics')->name('academics');
Route::view('/admissions', 'pages.admissions')->name('admissions');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');
