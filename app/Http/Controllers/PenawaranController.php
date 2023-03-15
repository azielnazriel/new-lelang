<?php

namespace App\Http\Controllers;

use App\Models\Historylelang;
use App\Models\Lelang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenawaranController extends Controller
{
    public function penawaran(Request $request, $idLelang)
    {
        $lelang = Lelang::where('id_15480', $idLelang)->firstOrFail();

        $validatedData = $request->validate([
            'penawaran_harga_15480' => 'required|numeric|gt:' . $lelang->getMinBid(),
        ]);

        $validatedData['id_lelang_15480'] = $idLelang;
        $validatedData['id_barang_15480'] = $lelang->id_barang_15480;
        $validatedData['id_masyarakat_15480'] = 1;
        // $validatedData['id_masyarakat_15480'] = Auth::guard('masyarakat')->user()->id_15480;

        HistoryLelang::create($validatedData);
        return redirect()->route('home');
    }
}
