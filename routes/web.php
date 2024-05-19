<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('attendance-monitoring/attendance', function () {
    return view('attendance-monitoring.attendance');
})->name('monitoring-attendance');


Route::match(['get', 'post'], '/clock-in', [AttendanceController::class, 'clockIn'])->name('clock-in');
Route::match(['get', 'post'], '/clock-out', [AttendanceController::class, 'clockOut'])->name('clock-out');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
