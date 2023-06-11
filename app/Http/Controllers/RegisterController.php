<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $messages = [
            'username.not_regex' => 'Username cannot contain spaces.',
        ];
        $validated = $request->validate([
            'name' => 'required|min:2|max:50',
            'username' => 'required|min:2|max:50|unique:users|not_regex:/\s/',
            'password' => 'required|min:6|max:255'
        ], $messages);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/login')->with('success', 'Registration successfully!');
    }
}
