<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', ["title" => 'Login']);
    }

    /**
     * Handle an authentication attempt.
     */
    public function loading(Request $request): RedirectResponse
    {
        $login = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                return redirect()->intended('satwils');
            } else {
                return redirect()->intended('user');
            }

        }

        return back()->withErrors([
            'name' => 'Username atau Password Salah!'
        ])->onlyinput('name');

    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function register()
    {
        return view('auth.register', ["title" => 'Register']);
    }

    public function loadres(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        $regis = new User([
            'name' => $request->name,
            'email' => $request->email,
            'email_verified_at' => null,
            'password' => Hash::make($request->password),
            'role_id' => '2',
            'remember_token' => Str::random(10),
        ]);

        $regis->save();

        return redirect('/login')->with('sukses', 'Registrasi Berhasil');

    }

    
}
