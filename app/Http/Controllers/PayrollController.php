<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Position;

class PayrollController extends Controller
{
    public function getEmployee()
    {
        $employees = User::where('type', 2)->where('is_accepted', 2)->get();
        return view('admin.payroll')
            ->with('employees', $employees);
    }

    public function employeePayroll($id)
    {
        $employee = User::with(['department', 'position'])->where('userID', $id)->first();

        return view('admin.employee-payroll')->with('employee', $employee);
    }
}
