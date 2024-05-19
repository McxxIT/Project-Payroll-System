<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\PayslipController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\AttendanceController;


Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});




Route::middleware(['auth', 'verified', 'employee'])->group(function () {

    Route::get('employee/dashboard', function () {
        return view('employee.employee-dashboard');
    })->name('employee-dashboard');

    Route::get('employee/payslip', function () {
        return view('employee.employee-payslip');
    })->name('employee-payslip');

    Route::get('employee/timekeeping', function () {
        return view('employee.employee-timekeeping');
    })->name('employee-timekeeping');

    Route::get('employee/details', function () {
        return view('employee.employee-details');
    })->name('employee-details');

    Route::get('employee/profile', function () {
        return view('employee.employee-profile');
    })->name('employee-profile');


    Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

    Route::get('employee/payslip', [IncomeController::class, 'submitEmployeePayslip'])->name('employee.payslip');

    Route::post('employee-payslip/{id}', [EmployeeController::class, 'getEmployeeForEmpPage'])->name('employee.employee-details');

});


Route::middleware(['auth', 'verified', 'admin'])->group(function () {



    Route::get('admin/dashboard', [DashboardController::class, 'redirect'])->name('dashboard');

    Route::get('admin/employee', [EmployeeController::class, 'redirect'])->name('employee');

    Route::get('admin/applicant', [ApplicantController::class, 'redirect'])->name('applicant');

    Route::get('admin/company', [DepartmentController::class, 'redirect'])->name('company');

    Route::get('admin/payroll-report', [DepartmentController::class, 'getDepartment'])->name('payroll-report');

    Route::get('admin/position', [PositionController::class, 'redirect'])->name('position');

    Route::get('admin/archive', [ApplicantController::class, 'allApplicants'])->name('archive');

    Route::get('admin/payroll', [PayrollController::class, 'getEmployee'])->name('payroll');

    Route::get('admin.payslip', [PayslipController::class, 'redirect'])->name('payslip');

    Route::get('employee-attendance', [EmployeeController::class, 'getEmployees'])->name('admin-attendance');




    Route::post('applicant/accepted/{id}', [ApplicantController::class, 'acceptedApplicant'])->name('acceptedApplicant');

    Route::post('applicant/declined/{id}', [ApplicantController::class, 'declinedApplicant'])->name('declinedApplicant');

    Route::post('employee-details/{id}', [EmployeeController::class, 'getEmployee'])->name('getEmployee');

    Route::post('department.store', [DepartmentController::class, 'store'])->name('departmentStore');

    Route::post('position.store', [PositionController::class, 'store'])->name('positionStore');

    Route::post('payroll-update/{id}', [PayrollController::class, 'employeePayroll'])->name('employeePayroll');

    Route::post('employeeIncome', [IncomeController::class, 'getIncome'])->name('submit-payslip');

    Route::post('update-employee', [PayslipController::class, 'updatePayslip'])->name('update-payslip');

    Route::post('attendance-details/{id}', [EmployeeController::class, 'getEmployee'])->name('attendance-employee');

    Route::post('view-attendance/{id}', [AttendanceController::class, 'getEmployee'])->name('view-attendance');



    Route::put('update-employee/{id}', [EmployeeController::class, 'updateEmployee'])->name('update-employee');


    Route::get('admin/payroll-report', function () {
        return view('admin.payroll-report');
    })->name('payroll-report');

    // Route::get('admin/payslip', function () {
    //     return view('admin.payslip');
    // })->name('payslip');

    Route::get('admin/profile', function () {
        return view('admin.admin-profile');
    })->name('admin-profile');

});

