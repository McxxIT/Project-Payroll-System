<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Department;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PayrollController extends Controller
{
    public function getEmployee()
    {
        $employees = User::where('type', 2)->where('is_accepted', 2)->get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.payroll')
        ->with('user_name', $name)
            ->with('employees', $employees);
    }

    public function payrollReport()
    {
        $departments = Department::where('is_active', 1)
            ->with(['users' => function($query) {
                $query->with('incomes');
            }])
            ->withCount('users')
            ->get();

        $totalPaysByDepartment = [];
        $totalPaysByUser = [];

        foreach ($departments as $department) {
            $totalPayByDepartment = 0;

            foreach ($department->users as $user) {
                $totalPayByUser = $user->incomes->sum('totalSalary');
                $totalPaysByUser[$user->userID] = number_format($totalPayByUser, 2);
                $totalPayByDepartment += $totalPayByUser;
            }

            $totalPaysByDepartment[$department->department_id] = number_format($totalPayByDepartment, 2);
        }

        $user = Auth::user();
        $name = $user->username;

        return view('admin.payroll-report', [
            'departments' => $departments,
            'totalPaysByDepartment' => $totalPaysByDepartment,
            'totalPaysByUser' => $totalPaysByUser,
            'user_name' => $name
        ]);
    }
    public function employeePayroll($id)
    {
        $employee = User::with(['department', 'position'])->where('userID', $id)->first();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.employee-payroll')->with('user_name', $name)->with('employee', $employee);
    }

    public function getEmployeePayroll($id)
    {
        $employee = Income::where('income_id', $id)->first();
        $user = DB::table('users')->where('userID', $employee->userID)->first();
        $user_department = DB::table('departments')->where('department_id', $user->department_id)->first();
        $user_position = DB::table('positions')->where('position_id', $user->position_id)->first();
        $uname = Auth::user();
        $name = $uname->username;
        return view('admin.view-employee-payslip-details')
        ->with('user_name', $name)
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
        $uname = Auth::user();
        $name = $uname->username;
        return view('employee.employee-details')
        ->with('user_name', $name)
        ->with('employee', $employee)
        ->with('user_department', $user_department)
        ->with('user_position', $user_position)
        ->with('user', $user);
    }
}
