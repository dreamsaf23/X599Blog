<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('Register.index', [
            "title" => "Register",
        ]);
    }

    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:12|unique:users',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:5|max:20'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        // Hash Method
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfull!');
    }
}
