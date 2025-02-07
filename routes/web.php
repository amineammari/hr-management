<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveRequestController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\PerformanceEvaluationController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('employees', EmployeeController::class);
    Route::resource('leaves', LeaveRequestController::class);
    Route::resource('salaries', SalaryController::class);
    Route::resource('performances', PerformanceEvaluationController::class);
    Route::resource('trainings', TrainingController::class);
    Route::resource('notifications', NotificationController::class);
    Route::put('/leaves/{leave}', [LeaveRequestController::class, 'update'])->name('leaves.update');
    Route::get('/employee/dashboard', [EmployeeController::class, 'dashboard'])->name('employee.dashboard');
    Route::get('/employee/leave-request/create', [EmployeeController::class, 'createLeaveRequest'])->name('employee.createLeaveRequest');
    Route::post('/employee/leave-request', [EmployeeController::class, 'storeLeaveRequest'])->name('employee.storeLeaveRequest');
});

require __DIR__.'/auth.php';
