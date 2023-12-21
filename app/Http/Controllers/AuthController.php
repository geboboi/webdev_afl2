<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register()
    {
        return view('auth.register', [
            'title' => "Register",
        ]);
    }

    public function registerAction()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput();
        }

        // Create a new user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => 1,
            'is_active' => '1'
        ]);

        // Generate token for the user
        // You can customize the redirect route after registration
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }

    public function login(){
        return view('auth.login', [
            'title' => "Login",
        ]);
    }

    public function loginAction(){
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('login')->withErrors($validator)->withInput();
        }
        $credentials = request()->only('email', 'password');
        if (auth()->attempt($credentials, request()->filled('remember_me'))) {
            return redirect()->route('landing');
        } else {
            session()->flash('error', 'Email Atau Password Salah.');
            return redirect()->route('login')->withInput();
        }
    }
}
