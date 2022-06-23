<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Login admin
    public function login()
    {
        return view('login_admin', ['title' => 'Login Admin']);
    }
    //login system admin
    public function login_system(Request $request)
    {
        $validatedata = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // cocokan Auth ke database pengajar dari inputan email dan password
        if (Auth::guard('admin')->attempt($validatedata)) {
            // jika cocokan true
            return redirect('/admin')->with('success', 'Selamat anda berhasil login');
        } else {
            // jika cocokan false
            return redirect('/login_admin')->with('error', 'Email atau Password salah');
        }
    }
    // aplod data admin ke database
    public function register()
    {
        return view('register_admin', ['title' => 'Register']);
    }
    public function aplod_data_admin(Request $request)
    {
        $data = new Admin;
        $data->username = $request->username;
        $data->email = $request->email;
        $password = bcrypt($request->password);
        $data->password = $password;
        $data->save();
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout Berhasil');
    }
}
