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
        $validate = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('admin')->attempt($validate)) {
            return redirect('/admin')->with('success', 'Login Berhasil');
        } else {
            return redirect('/admin/login')->with('error', 'Username atau Password Salah');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login')->with('success', 'Logout Berhasil');
    }
}
