<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetilKaryawanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('detil_karyawan', DetilKaryawanController::class);
// Route::get('/create', [DetilKaryawanController::class, 'create']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('store');

// Route::get('/dashboard', [AuthController::class, 'index']);
//Route::post('tambah_detil_karyawan',[DetilKaryawanController::class, 'tambah_detil_karyawan']);
Route::get('/detil_karyawan', [DetilKaryawanController::class, 'index'])->name('detil_karyawan.index')->middleware('auth');

// Route::get('/detil_karyawan', [DetilKaryawanController::class, 'index']);










