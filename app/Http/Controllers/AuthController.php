<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    /**
     * Show the form for Register.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function Register(Request $request)
    {
        $registred_status = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($registred_status) {
            return redirect()->intended('/login')->with('register.success', 'Registred successfully!');
        } else {
            return redirect()->intended('/login')->with('register.error', 'Error, Couldn\'t be registred!');
        }
    }

    /**
     * Show the form for login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            if (Auth::user()->is_admin) {
                // Redirect admin to admin dashboard
                return redirect()->intended(route('admin.index'));
            } else {
                // Redirect regular user to user dashboard or specific route
                return redirect()->intended('/')->with(['admin.name' => Auth::user()->name]);
            }
        } else {
            return back()->withErrors(['email' => 'The provided credentials do not match our records.'])->withInput($request->only('email'));
        }
    }


    /**
     * Logout process.
     */
    public function Logout()
    {
        // To prevent admin from logging out and losing access to is_admin field
        $id_admin = Auth::user()->is_admin;
        Session::flush();
        Auth::logout();

        return redirect()->intended('/');
    }
}
