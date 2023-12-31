<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required | max:255',
            'username' => 'required | max:255 | unique:users',
            'email' => 'required | email',
            'password' => 'required | min:5',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['isAdmin'] = false;

        User::create($validatedData);

        return redirect("/session")->with('success', 'User has been created!');
    }
}
