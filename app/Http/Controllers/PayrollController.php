<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Department;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class PayrollController extends Controller
{
    public function getEmployee()
    {
        $employees = User::where('type', 2)->where('is_accepted', 2)->get();
        return view('admin.payroll')
            ->with('employees', $employees);
    }

    public function payrollReport(){

    $departments = Department::where('is_active', 1)->withCount('users')->get();
      
    $totalPaysByDepartment = [];


    foreach ($departments as $department) {
       
        $totalPay = User::where('department_id', $department->department_id)
                        ->join('income', 'users.userID', '=', 'income.userID')
                        ->sum('income.totalSalary');

        $formattedTotalPay = number_format($totalPay);
        $totalPaysByDepartment[$department->department_id] = $formattedTotalPay;
    }

    return view('admin.payroll-report', [
        'departments' => $departments,
        'totalPaysByDepartment' => $totalPaysByDepartment
    ]);
    }

    public function employeePayroll($id)
    {
        $employee = User::with(['department', 'position'])->where('userID', $id)->first();
        $income = $employee->incomes()->latest()->first();
        return view('admin.employee-payroll')->with('employee', $employee);
    }

    public function getEmployeePayroll($id)
    {
        $employee = Income::where('income_id', $id)->first();
        $user = DB::table('users')->where('userID', $employee->userID)->first();
        $user_department = DB::table('departments')->where('department_id', $user->department_id)->first();
        $user_position = DB::table('positions')->where('position_id', $user->position_id)->first();
        return view('admin.view-employee-payslip-details')
        ->with('employee', $employee)
        ->with('user_department', $user_department)
        ->with('user_position', $user_position)
        ->with('user', $user);
    }


    public function getEmpPayslipForEmployee($id)
    {
        $employee = Income::where('income_id', $id)->first();
        $user = DB::table('users')->where('userID', $employee->userID)->first();
        $user_department = DB::table('departments')->where('department_id', $user->department_id)->first();
        $user_position = DB::table('positions')->where('position_id', $user->position_id)->first();
        return view('employee.employee-details')
        ->with('employee', $employee)
        ->with('user_department', $user_department)
        ->with('user_position', $user_position)
        ->with('user', $user);
    }
}
