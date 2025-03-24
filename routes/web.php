<?php

use App\Http\Controllers\admin\pages\AppointmentsController;
use App\Http\Controllers\admin\pages\DashboardController;
use App\Http\Controllers\admin\pages\DoctorsController;
use App\Http\Controllers\admin\pages\PatientsController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::prefix('pages')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('Admin.DashBoard');
        Route::get('Appointments', [AppointmentsController::class, 'index'])->name('Admin.Appointments');
        Route::get('doctors', [DoctorsController::class, 'index'])->name('Admin.Doctors');
        Route::get('patients', [PatientsController::class, 'index'])->name('Admin.Patients');
    });
});
