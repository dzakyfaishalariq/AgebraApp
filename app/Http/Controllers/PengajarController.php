<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register_pengajar', ['title' => 'Pengajar']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //tambah data pengajar ke database
        $pengajar = new Pengajar;
        //nama guru
        $pengajar->nama_guru = $request->nama_guru;
        // nip
        $pengajar->nip = $request->nip;
        // alamat
        $pengajar->alamat = $request->alamat;
        // no_hp
        $pengajar->no_hp = $request->no_hp;
        // email
        $pengajar->email = $request->email;
        // password
        $password = $request->password;
        $pengajar->password = bcrypt($password);
        // foto
        $validatefoto = $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $foto = $request->file('foto');
        //nama file
        $nama_file = $foto->getClientOriginalName();
        // jika nama file sudah ada jangan masukkan ke database
        if (Pengajar::where('nama_foto', $nama_file)->exists()) {
            return redirect('/register_pengajar')->with('error', 'Nama foto sudah ada yang make silahkan ganti nama foto');
        } else {
            //simpan file ke public
            $foto->move(public_path('img_databse_guru'), $nama_file);
        }
        //simpan nama file ke database
        $pengajar->foto = 'img_databse_guru/' . $nama_file;
        $pengajar->nama_foto = $nama_file;
        //simpan data pengajar ke database
        $pengajar->save();
        //redirect ke halaman registrasi dan tampilkan pesan sukses atau tidak
        if ($pengajar) {
            return redirect('/register_pengajar')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/register_pengajar')->with('error', 'Data gagal ditambahkan');
        }
    }
    /**
     * Login pengajar
     */
    public function login_pengajar()
    {
        return view('login_pengajar', ['title' => 'Login Pengajar']);
    }
    /**
     * Login pengajar system
     */
    public function login_pengajar_system(Request $request)
    {
        $validatedata = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // cocokan Auth ke database pengajar dari inputan email dan password
        if (Auth::guard('pengajar')->attempt($validatedata)) {
            // jika cocokan true
            return redirect('/pengajar');
        } else {
            // jika cocokan false
            return redirect('/login_pengajar')->with('error', 'Email atau Password salah');
        }
    }
    /**
     * Logout pengajar
     */
    public function logout_pengajar(Request $request)
    {
        Auth::guard('pengajar')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Logout Berhasil');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function show(Pengajar $pengajar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengajar $pengajar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengajar $pengajar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengajar  $pengajar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengajar $pengajar)
    {
        //
    }

    public function tampilan_data_pengajar()
    {
        $data = Pengajar::all();
        $jumlah_data = 0;
        foreach ($data as $d) {
            $jumlah_data += 1;
        }
        return view('');
    }
}
