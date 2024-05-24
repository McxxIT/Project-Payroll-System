<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function redirect(){
        $user = Auth::user();
        return view('admin.admin-profile')->with('user', $user);

    }
    
}
