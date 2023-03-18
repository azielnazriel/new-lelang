<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    public function index()
    {
        return view('petugas.index', [
            'header' => 'Data Petugas',
            'petugas' => Petugas::latest()->get()
        ]);
    }

    public function create()
    {
        return view('petugas.create', [
            'header' => 'Data Petugas',
            'level' => Level::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $petugas = $request->validate([
            'nama_petugas_15480' => 'required',
            'username_15480' => 'required|unique:petugas_15480',
            'password_15480' => 'required',
            'id_level_15480' => 'required',
        ]);
        $petugas['password_15480'] = Hash::make($request->password_15480);
        Petugas::create($petugas);
        return redirect()->route('petugas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('petugas.edit', [
            'header' => 'Edit Petugas',
            'petugas' => Petugas::where('id_15480', $id)->firstOrFail(),
            'level' => Level::latest()->get()
        ]);
    }

    public function update(Request $request, $id)
    {
        $petugas = $request->validate([
            'nama_petugas_15480' => 'required',
            'username_15480' => 'required',
            'telp_15480' => 'required|numeric',
        ]);

        $petugas['password_15480'] = $request->old_password;
        Petugas::where('id_15480', $id)->update($petugas);
        return redirect()->route('petugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Petugas::where('id_15480', $id)->delete();

        return redirect()->route('petugas.index');
    }
}
