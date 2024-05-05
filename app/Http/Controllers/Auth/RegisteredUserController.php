<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'address' => 'required',
            'contact' => 'required',
            'birthdate' => 'required|date',
            'gender' => 'required',
            'status' => 'required',
            'nationality' => 'required',
        ]);

        do {
            $userID = rand(00000, 99999);
        } while (User::where('userID', $userID)->exists());

        $user = User::create([
            'userID' => $userID,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'username' => $request->username,
            'address' => $request->address,
            'contact' => $request->contact,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'status' => $request->status,
            'nationality' => $request->nationality,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        


        return redirect(route('login', absolute: false));
    }
}
