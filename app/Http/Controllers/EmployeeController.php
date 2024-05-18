<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Position;
use App\Models\Shift;
use Illuminate\Support\Facades\Log;


class EmployeeController extends Controller
{
    public function redirect () {
        
        $employees = User::where('type',2)->where('is_accepted',2)->get();
        $activeEmployeesCount = $employees->where('is_active', 1)->count();
        $inactiveEmployeesCount = $employees->where('is_active', 0)->count();
        return view('admin.employee')->with('employees', $employees)->with('activeEmployeesCount', $activeEmployeesCount)->with('inactiveEmployeesCount', $inactiveEmployeesCount);
    }

    public function store (Request $request) {
        do {
            $employee_id = rand(00000, 99999);
        } while (User::where('employee_id', $employee_id)->exists());
    }

    public function getEmployee ($id) {
        $employee = User::where('userID', $id)->first();
        $departments = Department::where('is_active',1)->get();
        $positions = Position::where('is_active',1)->get();
        return view('admin.view-employees-details')
        ->with('positions', $positions) 
        ->with('departments', $departments)
        ->with('employee', $employee);
    }

    public function getEmployeeForEmpPage ($id) {
        $employee = User::where('userID', $id)->first();
        $departments = Department::where('is_active',1)->get();
        $positions = Position::where('is_active',1)->get();
        return view('employee.employee-details')
        ->with('positions', $positions) 
        ->with('departments', $departments)
        ->with('employee', $employee);
    }

    public function updateEmployee(Request $request, $id)
{
    $employee = User::findOrFail($id);

    $existingShift = Shift::where('id', $request->shift_type)->first();
    if (!$existingShift) {
        $shift = new Shift();
        $random_id = rand(00000, 99999);

        if ($request->shift_type === 1) {
            $shift->shift_start = '07:00:00';
            $shift->shift_end = '15:00:00';
            $shift->save();
        } elseif ($request->shift_type === 2) {
            $shift->shift_start = '15:00:00';
            $shift->shift_end = '23:00:00';
            $shift->save();
        } elseif ($request->shift_type === 3) {
            $shift->shift_start = '23:00:00';
            $shift->shift_end = '07:00:00';
            $shift->save();
        }
    }

    $employee->is_active = $request->is_active;
    $employee->save();

    // Log successful update
    Log::info('Employee details updated successfully.', ['employee_id' => $employee->id]);

    return redirect()->route('employee');
}
}
