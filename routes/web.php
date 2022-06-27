<?php

use App\Models\User;
use App\Models\Pengajar;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengajarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/pengajar', function () {
    return view('pengajar.pengajar_home', ['title' => 'Dashborad Pengajar']);
})->middleware('auth:pengajar');
Route::get('/admin', function () {
    return view('admin.home_admin', ['title' => 'Admin']);
})->middleware('auth:admin');
//register perserta
Route::get('/register', [UserController::class, 'index'])->middleware('guest');
Route::post('/register/applod', [UserController::class, 'create']);
//system login perserta
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/login/applod', [UserController::class, 'login_system']);
Route::get('/logout', [UserController::class, 'logout']);
//register pengajar
Route::get('/register_pengajar', [PengajarController::class, 'index'])->middleware('guest');
Route::post('/register_pengajar/applod', [PengajarController::class, 'store']);
//system login pengajar
Route::get('/login_pengajar', [PengajarController::class, 'login_pengajar'])->middleware('guest');
Route::post('/login_pengajar/applod', [PengajarController::class, 'login_pengajar_system']);
Route::get('/logout_pengajar', [PengajarController::class, 'logout_pengajar']);
//system login admin dan manajemen admin
Route::get('/login_admin', [AdminController::class, 'login'])->middleware('guest');
Route::post('/login_admin/applod', [AdminController::class, 'login_system']);
Route::get('/logout_admin', [AdminController::class, 'logout']);
Route::get('/register_admin', [AdminController::class, 'register'])->middleware('guest');
Route::post('/register_admin/applod', [AdminController::class, 'aplod_data_admin']);
Route::put('/edit_data_admin/{admin}', [AdminController::class, 'ubah_data_admin']);
Route::get('/hapus/admin/{admin}', [AdminController::class, 'hapus_data_admin']);
Route::get('/area_perserta', [UserController::class, 'tampilkan_data_perserta']);
Route::get('/hapus_data_user/{user}', [UserController::class, 'delete_data_user']);
