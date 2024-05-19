<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function redirect(){
        $clockin = Attendance::where('userID', auth()->user()->id)->where('clock-in', null)->first();
        $clockout = Attendance::where('userID', auth()->user()->id)->where('clock-out', null)->first();
        return view('attendance-monitoring.attendance')->with('clockin', $clockin)->with('clockout', $clockout);
    }
    
}
