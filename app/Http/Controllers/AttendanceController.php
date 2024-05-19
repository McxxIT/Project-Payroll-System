<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function getEmployee($id)
    {
        $employee = User::where('userID', $id)->first();
        return view('admin.view-attendance')
            ->with('employee', $employee);
    }

    public function clockIn(Request $request)
    {
        $request->validate([
            'userID' => 'required|exists:users,id',
        ]);

        $userID = $request->input('userID');

        // Create a new attendance record with clock_in time
        Attendance::create([
            'userID' => $request->userID,
            'clock_in' => Carbon::now(),
        ]);

        return redirect()->back()->with('status', 'Clocked in successfully!');
    }

    public function clockOut(Request $request)
    {
        $request->validate([
            'userID' => 'required|exists:users,userID',
        ]);

        $userID = $request->input('userID');

        // Find the latest attendance record for the user where clock_out is null
        $attendance = Attendance::where('userID', $userID)->whereNull('clock_out')->latest()->first();

        if (!$attendance) {
            return redirect()->back()->withErrors(['userID' => 'No clock-in record found.']);
        }

        // Update the record with clock_out time
        $attendance->update([
            'clock_out' => Carbon::now(),
        ]);

        return redirect()->back()->with('status', 'Clocked out successfully!');
    }
}
