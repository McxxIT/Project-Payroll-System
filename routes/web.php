<?php
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PayrollController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\LeaveController;

Route::get('/', function () {
    return view('auth.login');
});

// ==============ADMIN PAGE===============

Route::get('admin/dashboard', [DashboardController::class,'redirect'])->name('dashboard');

Route::get('admin/employee', [EmployeeController::class,'redirect'])->name('employee');

Route::get('admin/applicant', [ApplicantController::class,'redirect'])->name('applicant');

Route::get('admin/company', [DepartmentController::class,'redirect'])->name('company');

Route::get('admin/position', [PositionController::class,'redirect'])->name('position');

Route::get('admin/archive', [ApplicantController::class,'allApplicants'])->name('archive');

Route::get('admin/payroll', [PayrollController::class,'getEmployee'])->name('payroll');





Route::post('applicant/accepted/{id}', [ApplicantController::class,'acceptedApplicant'])->name('acceptedApplicant');

Route::post('applicant/declined/{id}', [ApplicantController::class,'declinedApplicant'])->name('declinedApplicant');

Route::post('employee-details/{id}', [EmployeeController::class, 'getEmployee'])->name('getEmployee');

Route::post('department.store', [DepartmentController::class,'store'])->name('departmentStore');

Route::post('position.store', [PositionController::class,'store'])->name('positionStore');

Route::post('payroll-update/{id}', [PayrollController::class,'employeePayroll'])->name('employeePayroll');

Route::post('employeeIncome/{id}', [IncomeController::class,'getIncome'])->name('employee-payslip');

Route::post('leave.store', [LeaveController::class,'store'])->name('request-leave');




Route::get('admin/payroll-update', function () {
    return view('admin.employee-payroll');
})->name('payroll-update');

Route::get('admin/payroll-report', function () {
    return view('admin.payroll-report');
})->name('payroll-report');

Route::get('admin/payslip', function () {
    return view('admin.payslip');
})->name('payslip');

Route::get('admin/profile', function () {
    return view('admin.admin-profile');
})->name('admin-profile');

Route::get('attendance-monitoring/attendance', function () {
    return view('attendance-monitoring.attendance');
})->name('monitoring-attendance');


    




Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');







// ==============ADMIN PAGE===============

Route::get('employee/dashboard', function () {
    return view('employee.employee-dashboard');
})-> name ('employee-dashboard');

Route::get('employee/payslip', function () {
    return view('employee.employee-payslip');
})-> name ('employee-payslip');

Route::get('employee/timekeeping', function () {
    return view('employee.employee-timekeeping');
})-> name ('employee-timekeeping');

Route::get('employee/details', function () {
    return view('employee.employee-details');
})-> name ('employee-details');

Route::get('employee/profile', function () {
    return view('employee.employee-profile');
})-> name ('employee-profile');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
