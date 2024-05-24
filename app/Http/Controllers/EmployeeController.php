<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Position;
use App\Models\Shift;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class EmployeeController extends Controller
{
    public function redirect() {
        $employees = User::where('type', 2)
                         ->where('is_accepted', 2)
                         ->orderBy('id')
                         ->get();
    
        $activeEmployeesCount = $employees->where('is_active', 1)->count();
        $inactiveEmployeesCount = $employees->where('is_active', 0)->count();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.employee')
               ->with('user_name', $name)
               ->with('employees', $employees)
               ->with('activeEmployeesCount', $activeEmployeesCount)
               ->with('inactiveEmployeesCount', $inactiveEmployeesCount);
    }

    public function getEmp() {
        $user = Auth::user();
        $name = $user->username;
        return view ('employee.employee-dashboard')->with('user_name', $name);
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
        $user = Auth::user();
        $name = $user->username;
        return view('admin.view-employees-details')
        ->with('user_name', $name)
        ->with('positions', $positions) 
        ->with('departments', $departments)
        ->with('employee', $employee);
    }

    public function updateCompany($id) {
        $employee = User::where('userID', $id)->first();
        $departments = Department::where('is_active',1)->get();
        $positions = Position::where('is_active',1)->get();
        return view('admin.employee')
        ->with('positions', $positions) 
        ->with('departments', $departments)
        ->with('employee', $employee);
    }

    public function payrollReport()
    {
        $employees = User::with('department')->where('type', 2)->where('is_accepted', 2)->get();
        return view('admin.payroll-report')->with('employees', $employees);
    }
    

    public function updateEmployee(Request $request, $id)
{
    $employee = User::findOrFail($id);

    // $existingShift = Shift::where('id', $request->shift_type)->first();
    // if (!$existingShift) {
    //     $shift = new Shift();
    //     $random_id = rand(00000, 99999);

    //     if ($request->shift_type === 1) {
    //         $shift->shift_start = '07:00:00';
    //         $shift->shift_end = '15:00:00';
    //         $shift->save();
    //     } elseif ($request->shift_type === 2) {
    //         $shift->shift_start = '15:00:00';
    //         $shift->shift_end = '23:00:00';
    //         $shift->save();
    //     } elseif ($request->shift_type === 3) {
    //         $shift->shift_start = '23:00:00';
    //         $shift->shift_end = '07:00:00';
    //         $shift->save();
    //     }
    // }

    $employee->shift_id = $request->shift_type;


    $employee->department_id = $request->department_id;
    $employee->position_id = $request->position_id;


    $employee->is_active = $request->is_active === 'on' ? 1 : 0;

    $employee->type = $request->user_type;

    $employee->is_active = $request->is_active;
    $employee->save();

    // Log successful update
    Log::info('Employee details updated successfully.', ['employee_id' => $employee->id]);

    return redirect()->route('employee');
}
}
