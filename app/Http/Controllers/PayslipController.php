<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PayslipController extends Controller
{
    public function redirect()
    {
        $employees = User::where('is_accepted', 2)->where('type', 2)->get();
        return view('admin.payslip')->with('employees', $employees);
    }
}
