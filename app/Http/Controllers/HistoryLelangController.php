<?php

namespace App\Http\Controllers;

use App\Models\Historylelang;
use App\Models\Lelang;
use App\Models\Masyarakat;
use App\Models\Pemenang;
use Illuminate\Http\Request;

class HistoryLelangController extends Controller
{
    public function create($idLelang)
    {
        return view('lelang.history-create', [
            'header' => 'History Create',
            'idLelang' => $idLelang,
            'users' => Masyarakat::latest()->get()
        ]);
    }

    public function store(Request $request, $idLelang)
    {
        $validatedData = $request->validate([
            'id_masyarakat_15480' => 'required',
            'penawaran_harga_15480' => 'required|numeric',
        ]);

        $lelang = Lelang::where('id_15480', $idLelang)->firstOrFail();
        $validatedData['id_lelang_15480'] = $lelang->id_15480;
        $validatedData['id_barang_15480'] = $lelang->id_barang_15480;

        Historylelang::create($validatedData);

        return redirect()->route('lelang.show', $idLelang);
    }

    public function winner(Request $request, $idLelang, $idHistory)
    {
        $lelang = Lelang::where('id_15480', $idLelang)->firstOrFail();
        $historyLelang = HistoryLelang::where('id_15480', $idHistory)->firstOrFail();

        Lelang::where('id_15480', $idLelang)->update([
            'status_15480' => 'ditutup',
            'harga_akhir_15480' => $historyLelang->penawaran_harga_15480,
            'id_masyarakat_15480' => $historyLelang->id_masyarakat_15480,
        ]);

        Pemenang::create([
            'id_lelang_15480' => $idLelang,
            'id_history_lelang_15480' => $idHistory
        ]);

        return redirect()->route('lelang.index');
    }
}
