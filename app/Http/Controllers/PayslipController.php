<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PayslipController extends Controller
{
    public function redirect()
    {$user = Auth::user();
        $name = $user->username;
        $employees = User::where('is_accepted', 2)->where('type', 2)->get();
        return view('admin.payslip')->with('user_name', $name)->with('employees', $employees);
    }
}
