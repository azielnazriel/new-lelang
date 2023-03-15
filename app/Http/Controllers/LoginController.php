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
    function postLogin(Request $request)
    {
        $request->validate([
            'username_15480' => 'required',
            'password_15480' => 'required'
        ], [
            'username_15480' => 'Username wajib diisi',
            'password_15480' => 'Pasword wajib diisi',
        ]);
        $infologin = [
            'username_15480' => $request->username,
            'password_15480' => $request->password
        ];

        if ($request->role == 'user') {
            if (Auth::guard('masyarakat')->attempt($infologin)) {
                return redirect('/')->with('success', 'Berhasil login');
            }
        } else {
            if (Auth::guard('petugas')->attempt($infologin)) {
                return redirect('/petu')->with('success', 'Berhasil login');
            }
        }

        return view('Username dan Password salah');
    }
    function logout()
    {
        Auth::logout();
        return redirect('login')->withErrors('success', 'Berhasil Logout');
    }
    function register()
    {
        return view('login.register');
    }
    function create(Request $request)
    {
        $request->validate([
            'nama_lengkap_15480' => 'required',
            'username_15480' => 'required|unique:tb_masyarakat_15459',
            'password_15480' => 'required|min:6',
            'telp_15480' => 'required'
        ], [
            'nama_lengkap_15480' => 'Nama wajib diisi',
            'username_15480' => 'Username wajib diisi',
            'username_15480.unique' => 'Username sudah digunakan, silakan masukkan Username yang lain',
            'password_15480' => 'Password wajib diisi',
            'password_15480.min' => 'Pasword harus lebih dari 6',
        ]);


        $data = [
            'nama_lengkap_15480' => $request->nama,
            'username_15480' => $request->username,
            'telp_15480' => $request->No_Telepon,
            'password_15480' => Hash::make($request->password)
        ];
        $newMasyarakat = Masyarakat::create($data);


        $infologin = [
            'username_15480' => $request->username,
            'password_15480' => $request->password
        ];

        if (Auth::guard('masyarakat')->attempt($infologin)) {
            return redirect('/user')->with('success', 'Berhasil login');
        }

        return redirect()->back();
    }
}
