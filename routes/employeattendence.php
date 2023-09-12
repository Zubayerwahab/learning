<?php

use App\Http\Controllers\backend\employeAttendenc\EmployeAttendensController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->controller(EmployeAttendensController::class)->prefix('/employeAttendenc')->group(function () {
    Route::get('/today', 'today')->name('today');
    Route::get('/manual', 'manual')->name('manual');
    Route::get('/details', 'details')->name('details');
    Route::get('/dailyDetails', 'dailyDetails')->name('dailyDetails');
    Route::get('/monthlyDetails', 'monthlyDetails')->name('monthlyDetails');
});

///All Shift List

