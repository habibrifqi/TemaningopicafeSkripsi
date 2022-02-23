<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:30|unique:users',
            // format atas sama bawah sama cuma beda penulisans
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd($request);
        User::create($validatedData);
        // $request->session()->flash('success', 'registrasi berhasil silahkan login');
        $request->session();
        return Redirect('/');
    }
}
