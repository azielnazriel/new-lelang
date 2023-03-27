<?php

namespace App\Http\Controllers;

use App\Models\Lelang;
use App\Models\Pemenang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $pemenang = Pemenang::join('history_lelangs_15480', 'history_lelangs_15480.id_15480', '=', 'pemenang_15480.id_history_lelang_15480')
            ->join('barangs_15480', 'barangs_15480.id_15480', '=', 'history_lelangs_15480.id_barang_15480')
            ->where('history_lelangs_15480.id_masyarakat_15480', 1)
            ->orderBy('pemenang_15480.created_at')
            ->get();

        return view('home.index', [
            'lelang' => Lelang::where('status_15480', 'dibuka')
                ->with('historyLelang')
                ->latest()
                ->get(),
            'myWinnerHistory' => $pemenang
        ]);
    }
}
