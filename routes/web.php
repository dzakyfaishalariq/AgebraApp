<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Storage;

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
    $data = User::all();
    $file = Storage::url('app');
    return view('home', ['title' => 'Home', 'kumpulan_data' => $data, 'file' => $file]);
});
Route::get('/register', [UserController::class, 'index'])->middleware('guest');
Route::post('/register/applod', [UserController::class, 'create']);
//system login
Route::get('/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/login/applod', [UserController::class, 'login_system']);
Route::get('/logout', [UserController::class, 'logout']);
