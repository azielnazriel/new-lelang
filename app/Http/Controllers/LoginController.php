<?php

namespace App\Http\Controllers;

use App\Models\masyarakat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{

    function index()
    {
        return view("login.login");
    }

    function authenticate(Request $request)
    {
        $request->validate([
            'username_15480' => 'required',
            'password_15480' => 'required'
        ], [
            'username_15480' => 'Username wajib diisi',
            'password_15480' => 'Pasword wajib diisi',
        ]);

        $credentials = [
            'username_15480' => $request->username_15480,
            'password' => $request->password_15480
        ];

        if ($request->role == 'user') {
            if (Auth::guard('masyarakat')->attempt($credentials)) {
                return redirect()->route('home');
            }
        } else {
            if (Auth::guard('petugas')->attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        return redirect()->back()->withInput();
    }

    function register()
    {
        return view('login.register');
    }

    function create(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nama_lengkap_15480' => 'required',
            'username_15480' => 'required|unique:masyarakats_15480',
            'password_15480' => 'required',
            'telp_15480' => 'required'
        ], [
            'nama_lengkap_15480' => 'Nama wajib diisi',
            'username_15480' => 'Username wajib diisi',
            'username_15480.unique' => 'Username sudah digunakan, silakan masukkan Username yang lain',
            'password_15480' => 'Password wajib diisi',
        ]);

        $validatedData['password_15480'] = Hash::make($request->password_15480);
        Masyarakat::create($validatedData);

        $credentials = [
            'username_15480' => $request->username_15480,
            'password' => $request->password_15480
        ];

        if (Auth::guard('masyarakat')->attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    function logout()
    {
        if (Auth::guard('masyarakat')->check()) {
            Auth::guard('masyarakat')->logout();
        }

        if (Auth::guard('petugas')->check()) {
            Auth::guard('petugas')->logout();
        }

        return redirect()->route('login');
    }
}
