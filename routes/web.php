
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\Auth\LoginController;
use App\Http\Controllers\user\pages\HomeController;
use App\Http\Controllers\user\Auth\ContactController;
use App\Http\Controllers\user\pages\MajorsController;
use App\Http\Controllers\user\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\admin\pages\PatientsController;
use App\Http\Controllers\admin\pages\DashboardController;
use App\Http\Controllers\admin\pages\AppointmentsController;
use App\Http\Controllers\admin\pages\MajorsController as PagesMajorsController;
use App\Http\Controllers\User\Pages\DoctorsController as UserDoctorsController;
use App\Http\Controllers\Admin\Pages\DoctorsController as AdminDoctorsController;

Route::get('/',[UserDoctorsController::class,'index'])->name('home');

    Route::prefix('user')->group(function () {
        Route::prefix('pages')->group(function () {
            Route::get('majors', [MajorsController::class, 'index'])->name('user.majors');
            Route::get('doctors', [UserDoctorsController::class, 'index2'])->name('user.doctors');
            Route::get('contact', [ContactController::class, 'index'])->name('user.contact');
            Route::get('create/{id}',[UserDoctorsController::class,'create'])->name('user.create');
            Route::post('store',[UserDoctorsController::class,'store'])->name('user.store');
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
                Route::get('edit/{id}', [PagesMajorsController::class, 'edit'])->name('majors.edit');
                Route::put('update/{id}', [PagesMajorsController::class, 'update'])->name('majors.update');
                Route::post('index',[PagesMajorsController::class,'search'])->name('majors.search');
            });
        });
    });


    // Route::get('/', function () {
        //     return view('home');
        // });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
