<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Registrasi';
        //tampilkan view register
        return view('register', ['title' => $title]);
    }
    /**
     * tampilan login
     */
    public function login()
    {
        $title = 'Login';
        return view('login', ['title' => $title]);
    }
    /**
     * Fungsi sysytem login
     */
    public function login_system(Request $request)
    {
        $validatedata = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($validatedata)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return redirect('/login')->with('error', 'Email atau Password Salah');
        }
    }
    /**
     * login logout
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //tambah data user
        $user = new User;
        //nama
        $user->name = $request->name;
        //jenis kelamin
        $user->jenis_kelamin = $request->jenis_kelamin;
        //jenjang pendidikan
        $user->jenjang_pendidikan = $request->jenjang_pendidikan;
        //umur
        $umur = $request->umur;
        //ubah ke integer
        $user->umur = (int)$umur;
        //tempat lahir
        $user->tempat_lahir = $request->tempat_lahir;
        //mengambil tanggal lahir
        $tanggal_lahir = $request->tanggal_lahir;
        //ubah ke format tanggal
        $user->tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
        //alamat
        $user->alamat = $request->alamat;
        // aplod gambar utuh
        $validatefoto = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $foto = $request->file('foto');
        //nama file
        $nama_file = $foto->getClientOriginalName();
        // jika nama file sudah ada jangan masukkan ke database
        if (User::where('nama_foto', $nama_file)->exists()) {
            return redirect('/register')->with('error', 'Nama foto sudah ada yang make silahkan ganti nama foto');
        } else {
            //simpan file ke public
            $foto->move(public_path('img_database'), $nama_file);
        }
        //simpan nama file ke database
        $user->nama_foto = $nama_file;
        $user->foto = 'img_database/' . $nama_file;
        //email
        $email = $request->email;
        //jika email sudah ada tampilkan error
        if (User::where('email', $email)->exists()) {
            return redirect('/register')->with('error', 'Email sudah terdaftar');
        } else {
            $user->email = $email;
        }
        //password
        $user->password = Crypt::encrypt($request->password);
        //simpan data user ke database
        $user->save();
        //redirect ke halaman registrasi dan tampilkan pesan sukses atau tidak
        if ($user) {
            return redirect('/register')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/register')->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function tampilkan_data_perserta()
    {
        $data = User::all();
        $jumlah_data = 0;
        foreach ($data as $d) {
            $jumlah_data += 1;
        }
        return view('/ra_perserta', ['title' => 'Data Admin', 'data' => $data, 'jumlah_data' => $jumlah_data]);
    }

    public function delete_data_user(User $user)
    {
        $file_foto = $user->foto;
        if (file_exists($file_foto)) {
            //hapus data foto
            @unlink($file_foto);
        }
        $nilai = $user->delete();
        if ($nilai) {
            return redirect('/area_perserta')->with('success', 'Data Berhasil di hapus');
        } else {
            return redirect('/area_perserta')->with('error', 'maaf data tidak terhapus');
        }
    }
}
