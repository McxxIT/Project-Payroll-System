<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function redirect(){
        $pendings = User::where('is_accepted',1)->get();
        $employees = User::where('is_accepted',2)->get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.dashboard')->with('pendings', $pendings)->with('user_name', $name)->with('employees', $employees);
    }

}
