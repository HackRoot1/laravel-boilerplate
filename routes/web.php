<?php

use App\Models\User;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;


// Registration and storing data in db
Route::view('/register', 'register')->name('register');
Route::post('/store-user', [UserController::class, 'store'])->name('user.store');

// Login and Login Authentication
Route::view('/login', 'login')->name('login');
Route::post('/auth-check', [AuthController::class, 'authCheck'])->name('auth.check');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware('IsUser')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('dashboard');
});


Route::middleware('IsAdmin')->group(function () {

    // View Logs Page
    Route::get('/admin/activity-logs', function () {
        $logs = \App\Models\ActivityLog::with('user')->latest()->paginate(25);
        return view('activity-logs', compact('logs'));
    });
})->name('admin.logs');

// demo for CRUD Operations 
Route::get('/students-list', [StudentController::class, 'index'])->name('student.index');
Route::view('/add-student', 'student.create')->name('student.create');
Route::get('/view-student/{id}', [StudentController::class, 'view'])->name('student.view');
Route::post('/store-student', [StudentController::class, 'store'])->name('student.store');
Route::get('/students-edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/students-update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students-delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
