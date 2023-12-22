<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function register()
    {
        if (Auth::user()) {
            return redirect()->route('landing');
        } else {
            return view('auth.register', [
                'title' => "Register",
            ]);
        }
    }

    public function registerAction()
    {
        $validator = Validator::make(request()->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')->withErrors($validator)->withInput()->with('error', 'Registrasi gagal. Mohon periksa informasi Anda dan coba lagi.');
        }

        // Create a new user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'role_id' => 1,
            'is_active' => '1'
        ]);

        if ($user) {
            // Redirect the user to the login page with success message
            return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
        } else {
            // Handle the case where user creation fails
            return redirect()->route('register')->with('error', 'Registration failed. Please try again later.');
        }
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function login()
    {
        if (Auth::user()) {
            return redirect()->route('landing');
        } else {
            return view('auth.login', [
                'title' => "Login",
            ]);
        }
    }

    public function loginAction()
    {
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
