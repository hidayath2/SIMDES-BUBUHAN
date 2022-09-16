<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\Captcha;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.admin');
    }

    public function authenticate(Request $request)
    {
        // dd($request);
        $request->validate([
            'nik' => ['required'],
            'password' => ['required'],
            'g-recaptcha-response' => new Captcha()
        ]);

        if (Auth::attempt($request->only('nik', 'password'))) {
            $request->session()->regenerate();
            if (Auth::user()->role=='masyarakat') {
                # code...
                return redirect()->intended('/datapribadi');
            }
            if (Auth::user()->role=='admin') {
                # code...
                return redirect()->intended('/dashboarda');
            }

        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        auth()->logout();
 
        // request()->session()->invalidate();
 
        // request()->session()->regenerateToken();
 
        return redirect('/logout');
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();
 
    //     request()->session()->invalidate();
 
    //     request()->session()->regenerateToken();
 
    //     return redirect('/');
    // }
}
