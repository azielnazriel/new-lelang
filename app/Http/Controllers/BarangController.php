<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang.index', [
            'header' => 'Data Barang',
            'barang' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('barang.create', [
            'header' => 'Data Barang',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = $request->validate([
            'nama_barang_15480' => 'required',
            'tgl_15480' => 'required',
            'nama_lengkap_15480' => 'required',
            'harga_awal_15480' => 'required',
            'deskripsi_15480' => 'required',
            'gambar_15480' => 'required|image',
        ]);

        $barang['gambar_15480'] = $request->file('gambar_15480')->store('barang-image');

        Barang::create($barang);
        return redirect()->to('barang')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('barang.edit', [
            'header' => 'Edit Barang',
            'barang' => Barang::where('id_15480', $id)->firstOrFail(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = $request->validate([
            'nama_barang_15480' => 'required',
            'tgl_15480' => 'required',
            'nama_lengkap_15480' => 'required',
            'harga_awal_15480' => 'required',
            'deskripsi_15480' => 'required',
        ]);

        if ($request->gambar_15480 != null) {
            $barang['gambar_15480'] = $request->file('gambar_15480')->store('barang-image');
        } else {
            $barang['gambar_15480'] = $request->old_gambar;
        }

        // $barang['nama_barang_15480'] = $request->old_barang;
        Barang::where('id_15480', $id)->update($barang);
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::where('id_15480', $id)->delete();

        return redirect('barang');
    }
}
