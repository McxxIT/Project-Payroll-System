<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function redirect()
    {
        $departments = Department::get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.company')->with('user_name', $name)->with('departments', $departments);
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


    public function activate($id)
    {
        $department = Department::findOrFail($id);
        $department->update(['is_active' => 1]);

        return redirect()->back()->with('success', 'Department activated successfully');
    }

    public function deactivate($id)
    {
        $department = Department::findOrFail($id);
        $department->update(['is_active' => 0]);

        return redirect()->back()->with('success', 'department deactivated successfully');
    }
}