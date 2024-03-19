<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\DetilKaryawan;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', [
            'title' => 'login',
            'active' => 'login'
        ]);


    }

    public function index()
    {
        $detil_karyawan = DetilKaryawan::all();
        return view('detil_karyawan.index', compact('detil_karyawan'))->with('loginSuccess', 'Login berhasil!');
        // return view('dashboard.index');
    }



    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            // return redirect()->intended('/dashboard');
            return redirect()->intended('/detil_karyawan')->with('loginSuccess', 'Login berhasil!');
        }

        return back()->with('loginError', 'login gagal! Silahkan cek email dan password anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255|confirmed',
        ], [
            'email' => 'Email sudah terdaftar',
            'password.confirmed' => 'confirmasi password tidak sama.',
            'password' => 'Password minimal 8 karakter',
        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        $request->session()->flash('success', 'Registrasi berhasil! silahkan login');

        return redirect('/login');
    }
}
