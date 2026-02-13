<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::get('/staff', [App\Http\Controllers\StaffController::class, 'index'])->name('staff');
Route::get('/staff/all', [App\Http\Controllers\StaffController::class, 'allstaff'])->name('staff.all');
Route::view('/academics', 'pages.academics')->name('academics');   
Route::view('/admissions', 'pages.admissions')->name('admissions');
Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');


Route::prefix('admin')
    ->middleware(['auth', 'role:super-admin|admin'])
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

});