<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return View('auth.register');
    }

    public function store(Request $request)
    {

        
        
        $request -> validate([
            'name' => ['required','max:50'],
            'username' => ['required','unique:users','min:3', 'max:20', 'regex:/^[a-zA-Z][a-zA-Z0-9]+$/'],
            'email' => ['required', 'email', 'max:60','unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],

        ]);

        User::create([
            'name' => $request->name,
            'username' => Str::lower($request->username),
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
        auth()->attempt([
            'username'=> $request->username,
            'password'=> $request->password,
        ]);

        return redirect()->route('muro.index');
    }
}
