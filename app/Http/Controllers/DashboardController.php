<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function redirect(){
        $pendings = User::where('is_accepted',1)->get();
        $employees = User::where('is_accepted',2)->get();
        return view('admin.dashboard')->with('pendings', $pendings)->with('employees', $employees);
    }
}
