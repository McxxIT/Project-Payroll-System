<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
use App\Models\User;

class AttendanceController extends Controller
{
    public function redirect()
    {
        return view('attendance-monitoring.attendance');
    }

    public function store(Request $request)
    {
        $employeeId = $request->input('employeeId');
        $timezone = 'Asia/Manila';
        $currentDateTime = Carbon::now($timezone);

        $user = User::where('userID', $employeeId)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }


        if ($user->is_accepted == 1 || $user->is_accepted == 3) {
            return redirect()->back()->with('error', 'User is not allowed to clock in or out');
        }

        if ($request->has('clock-in')) {

            $existingClockIn = Attendance::where('userID', $employeeId)
                ->whereNull('clockout')
                ->orderBy('clockin', 'desc')
                ->first();

            if ($existingClockIn) {
                return redirect()->back()->with('error', 'Already clocked in');
            }

            $attendance = new Attendance();
            $attendance->userID = $employeeId;
            $attendance->date = $currentDateTime->toDateString();
            $attendance->clockin = $currentDateTime->toTimeString();
            $attendance->save();

            return redirect()->back()->with('success', 'Clocked In');
        }

        if ($request->has('clock-out')) {
            $attendance = Attendance::where('userID', $employeeId)
                ->whereNotNull('clockin')
                ->whereNull('clockout')
                ->orderBy('clockin', 'desc')
                ->first();
            if ($attendance) {
                $clockInTime = Carbon::parse($attendance->clockin, $timezone);
                $clockOutTime = $currentDateTime;
                $duration = $clockOutTime->diff($clockInTime);
                $hours = $duration->h;
                $minutes = $duration->i;
                $decimalHours = $hours + ($minutes / 60);
                $attendance->clockout = $clockOutTime->toTimeString();
                $attendance->hoursRendered = round($decimalHours, 2);
                return redirect()->back()->with('success', 'Clocked Out');
            } else {
                return redirect()->back()->with('error', 'No clock-in record found');
            }
        }

        return redirect()->back()->with('error', 'Invalid request');
    }

}