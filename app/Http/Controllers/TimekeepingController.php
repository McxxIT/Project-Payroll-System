<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Attendance;
class TimekeepingController extends Controller
{
    public function redirect()
    {

        $user = Auth::user();

        $attendanceRecords = Attendance::where('userID', $user->userID)->get();
        // Pass the user data to the view
        return view('employee.employee-timekeeping', compact('attendanceRecords'));

    }
}
