<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        // Authorization is done in the RegisterRequest

        // Insert data
        User::create($request->validated());

        return to_route('login')->with('status', 'Registration was successful; login to your account.');
    }
}
