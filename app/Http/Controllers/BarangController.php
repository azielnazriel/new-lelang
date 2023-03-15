<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index', [
            'header' => 'Data Barang',
            'barang' => Barang::latest()->get()
        ]);
    }

    public function create()
    {

        return view('barang.create', [
            'header' => 'Data Barang',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang_15480' => 'required',
            'tgl_15480' => 'required',
            'harga_awal_15480' => 'required',
            'deskripsi_15480' => 'required',
            'gambar_15480' => 'required|image',
        ]);

        $validatedData['gambar_15480'] = $request->file('gambar_15480')->store('barang-image');

        Barang::create($validatedData);
        return redirect()->to('barang')->with('success', 'Berhasil menambahkan data');
    }

    public function edit($id)
    {
        return view('barang.edit', [
            'header' => 'Edit Barang',
            'barang' => Barang::where('id_15480', $id)->firstOrFail(),

        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_barang_15480' => 'required',
            'tgl_15480' => 'required',
            'harga_awal_15480' => 'required',
            'deskripsi_15480' => 'required',
        ]);

        if ($request->gambar_15480 != null) {
            $validatedData['gambar_15480'] = $request->file('gambar_15480')->store('barang-image');
        } else {
            $validatedData['gambar_15480'] = $request->old_gambar;
        }

        Barang::where('id_15480', $id)->update($validatedData);
        return redirect('/barang');
    }

    public function destroy($id)
    {
        Barang::where('id_15480', $id)->delete();

        return redirect('barang');
    }
}
