<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;

class LeaveController extends Controller
{
    public function redirect(){
        $leave = Leave::where('is_active', 1)->get();
        return view('admin.company')->with('departments', $departments);
    }
}
