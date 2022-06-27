<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
        $data = Admin::all();
        $jumlah_data = 0;
        foreach ($data as $d) {
            $jumlah_data += 1;
        }
        return view('ra_admin', ['title' => 'Register', 'data' => $data, 'jumlah_data' => $jumlah_data]);
    }
    public function aplod_data_admin(Request $request)
    {
        $data = new Admin;
        $data->username = $request->username;
        $data->email = $request->email;
        $password = Crypt::encrypt($request->password);
        $data->password = $password;
        $data->save();
        if ($data) {
            return redirect('/register_admin')->with('success', 'Data anda berhasil di tambahkan');
        } else {
            return redirect('/register_admin')->with('error', 'maaf data anda tidak bisa di daftarkan');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout Berhasil');
    }
    public function hapus_data_admin(Admin $admin)
    {
        $admin->delete();
        if ($admin) {
            return redirect('/register_admin')->with('success', 'Data berhasil di hapus');
        } else {
            return redirect('/register_admin')->with('error', 'maaf data tidak terhapus ada kesalahan system');
        }
    }
    public function ubah_data_admin(Admin $admin, Request $request)
    {
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->save();
        if ($admin) {
            return redirect('/register_admin')->with('success', 'data anda berhasil di simpan');
        } else {
            return redirect('/register_admin')->with('error', 'maaf data anda gagal di ubah');
        }
    }
}
