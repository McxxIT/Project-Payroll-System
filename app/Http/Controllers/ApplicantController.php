<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplicantController extends Controller
{
    public function redirect(){
        $userApplicants = User::where('type', 2)->where('is_accepted', 1)->where('is_active', 1)->get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.applicant')->with('user_name', $name)->with('userApplicants', $userApplicants);
    }

    public function allApplicants () {
        $applicants = User::where('type',2)->get();
        $user = Auth::user();
        $name = $user->username;
        return view('admin.archive')->with('user_name', $name)->with('applicants', $applicants);
    }

    public function acceptedApplicant ($id) {
        $acceptedApplicant = User::findOrFail($id);
        $acceptedApplicant->password = $acceptedApplicant->username . $acceptedApplicant->userID;
        $acceptedApplicant->is_accepted = 2;
        $acceptedApplicant->save();
        return redirect()->back();
    }   

    public function declinedApplicant ($id) {
        $declinedApplicant = User::findOrFail($id);
        $declinedApplicant->is_accepted = 3;
        $declinedApplicant->save();
        return redirect()->back();
    }
}
