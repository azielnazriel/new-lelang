<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Historylelang;
use App\Models\Lelang;
use App\Models\Pemenang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LelangController extends Controller
{
    public function index()
    {
        return view('lelang.index', [
            'header' => 'Data Lelang',
            'lelang' => Lelang::latest()->with('user')->get()

        ]);
    }

    public function create()
    {
        return view('lelang.create', [
            'header' => 'Data Lelang',
            'barang' => Barang::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang_15480' => 'required',
        ]);

        Lelang::create([
            'id_barang_15480' => $request->id_barang_15480,
            'tgl_lelang_15480' => date('Y-m-d'),
            'status_15480' => 'dibuka',
            'id_petugas_15480' => Auth::guard('petugas')->user()->id_15480,
        ]);

        return redirect()->to('lelang')->with('success', 'Berhasil menambahkan data');
    }

    public function show($id)
    {
        $lelang = Lelang::where('id_15480', $id)->firstOrFail();
        $pemenang = Pemenang::where('id_lelang_15480', $lelang->id_15480)->first();

        return view('lelang.show', [
            'header' => 'Detail Lelang',
            'history' => Historylelang::where('id_lelang_15480', $id)
                ->latest()
                ->get(),
            'lelang' => $lelang,
            'idHistoryPemenang' => $pemenang != null ? $pemenang->id_history_lelang_15480 : 0
        ]);
    }
}
