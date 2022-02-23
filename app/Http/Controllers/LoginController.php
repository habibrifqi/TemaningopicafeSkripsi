<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\Facades\Auth;
use Illuminate\Http\RedirectResponse\toastr;

class LoginController extends Controller
{
    public function index()
    {

        return view('login/index');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // dd(Auth::attempt($credentials));
            return redirect()->intended('/');
        }
       
        
        return redirect()->route('login')->with('error','Login gagal,Silahkan periksa email dan passoword anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
