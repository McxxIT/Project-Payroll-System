<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeProfileController extends Controller
{
    public function redirect(){
        $user = Auth::user();
        return view('employee.employee-profile')->with('user', $user);

    }
}
