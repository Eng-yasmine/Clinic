<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Pages\DoctorsController as UserDoctorsController;
use App\Http\Controllers\Admin\Pages\DoctorsController as AdminDoctorsController;
use App\Http\Controllers\user\Auth\LoginController;
use App\Http\Controllers\user\pages\HomeController;
use App\Http\Controllers\user\Auth\ContactController;
use App\Http\Controllers\user\pages\MajorsController;
use App\Http\Controllers\user\Auth\RegisterController;
use App\Http\Controllers\admin\pages\PatientsController;
use App\Http\Controllers\admin\pages\DashboardController;
use App\Http\Controllers\admin\pages\AppointmentsController;
use App\Http\Controllers\admin\pages\MajorsController as PagesMajorsController;

Route::prefix('/')->group(function () {
    Route::prefix('user')->group(function () {
        Route::prefix('pages')->group(function () {
            Route::get('index', [HomeController::class, 'index'])->name('user.index');
            Route::get('majors', [MajorsController::class, 'index'])->name('user.majors');
            Route::get('doctors', [UserDoctorsController::class, 'index'])->name('user.doctors');
            Route::get('register', [RegisterController::class, 'index'])->name('user.register');
            Route::get('login', [LoginController::class, 'index'])->name('user.login');
            Route::get('contact', [ContactController::class, 'index'])->name('user.contact');
        });
    });
});


Route::prefix('admin')->group(function () {
    Route::prefix('pages')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('Admin.DashBoard');
        Route::get('Appointments', [AppointmentsController::class, 'index'])->name('Admin.Appointments');
        Route::get('doctors', [AdminDoctorsController::class, 'index'])->name('Admin.Doctors');
        Route::get('patients', [PatientsController::class, 'index'])->name('Admin.Patients');
        Route::prefix('majors')->group(function () {
            Route::get('index', [PagesMajorsController::class, 'index'])->name('majors.index');
            Route::get('create', [PagesMajorsController::class, 'create'])->name('major.create');
            Route::post('store', [PagesMajorsController::class, 'store'])->name('majors.store');
            Route::delete('destroy/{id}', [PagesMajorsController::class, 'destroy'])->name('majore.destroy');
            Route::get('edit/{id}',[PagesMajorsController::class,'edit'])->name('majors.edit');
            Route::put('update/{id}',[PagesMajorsController::class,'update'])->name('majors.update');
        });
    });
});
