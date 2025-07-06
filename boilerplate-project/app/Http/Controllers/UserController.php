<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        // validating input fields
        $validated = Validator::make($request->all(), [
            'first_name'          => 'required|string|max:255',
            'last_name'           => 'required|string|max:255',
            'email'               => 'required|email|unique:users,email',
            'password'            => 'required|min:6|same:password_confirmation',
            'password_confirmation'  => 'required',
        ]);

        // throwing error if validation fails
        if ($validated->fails()) {
            return back()->withErrors($validated)->withInput();
        }

        // checking if user already exist or not
        $isUserExists = User::where('email', $request->email)->first();
        if ($isUserExists) {
            return back()->withInput()->with('error', 'User Already Exists with ' . $request->email);
        }

        // storing user data
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        // throwing error if data not stored
        if (!$user) {
            return back()->with('error', 'Something went wrong while registering.');
        }

        return redirect()->route('login')->with('success', 'User Registered Successful');
    }
}
