<?php

namespace App\Http\Controllers;

use App\Exports\LelangExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function lelang(Request $request)
    {
        $request->validate([
            'date_start' => "required",
            'date_finish' => "required",
            'status' => "required|in:semua,dibuka,ditutup",
        ]);

        return Excel::download(new LelangExport($request->date_start, $request->date_finish, $request->status), 'lelang.xlsx');
    }
}
