<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class PayrollController extends Controller
{
    public function getEmployee () {
        $employees = User::where('type',2)->where('is_accepted',1)->get();
        return view('admin.payroll')
        ->with('employees', $employees);
    }
}
