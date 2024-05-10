<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PayrollController extends Controller
{
    public function getEmployee () {
        $employees = User::where('type',2)->where('is_accepted',2)->get();
        return view('admin.payroll')
        ->with('employees', $employees);
    }

    public function employeePayroll ($id) {
        $employee = User::where('userID', $id)->first();
        // $departments = Department::where('is_active',1)->get();
        // $positions = Position::where('is_active',1)->get();
        return view('admin.employee-payroll')
        // ->with('positions', $positions) 
        // ->with('departments', $departments)
        ->with('employee', $employee);
    }
}
