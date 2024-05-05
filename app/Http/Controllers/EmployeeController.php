<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Position;

class EmployeeController extends Controller
{
    public function redirect () {
        
        $employees = User::where('type',2)->where('is_accepted',2)->get();
        return view('admin.employee')->with('employees', $employees);
    }

    public function store (Request $request) {
        do {
            $employee_id = rand(00000, 99999);
        } while (User::where('employee_id', $employee_id)->exists());
    }

    public function getEmployee ($id) {
        $employee = User::findOrFail($id);
        $departments = Department::where('is_active',1)->get();
        $positions = Position::where('is_active',1)->get();
        return view('admin.view-employees-details')
        ->with('positions', $positions) 
        ->with('departments', $departments)
        ->with('employee', $employee);
    }


}
