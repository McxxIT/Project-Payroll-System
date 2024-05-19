<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function redirect()
    {
        $departments = Department::where('is_active', 1)->get();
        return view('admin.company')->with('departments', $departments);
    }
    public function store(Request $request)
    {
        $request->validate([
            "department_name" => "required|unique:departments",
        ]);
        $department = new Department();
        $department->department_id = $request->department_id;
        $department->department_name = $request->department_name;
        do {
            $department_id = rand(00000, 99999);
        } while (Department::where('department_id', $department_id)->exists());

        $department->department_id = $department_id;

        $department->save();
        return redirect()->back()->with("success", "Department Added Successfully");

    }
}