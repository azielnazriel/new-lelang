<?php

namespace App\Http\Controllers;

use App\Models\Level;
use App\Models\Petugas;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('petugas.index', [
            'header' => 'Data Petugas',
            'petugas' => Petugas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create', [
            'header' => 'Data Petugas',
            'level' => Level::all()
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
        $petugas = $request->validate([
            'nama_petugas_15480' => 'required',
            'username_15480' => 'required|unique:petugas_15480',
            'password_15480' => 'required',
            'id_level_15480' => 'required',
        ]);
        $petugas['password_15480'] = Hash::make($request->password_15480);
        Petugas::create($petugas);
        return redirect('/petu');
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
        return view('petugas.edit', [
            'header' => 'Edit Petugas',
            'petugas' => Petugas::where('id_15480', $id)->firstOrFail(),
            'level' => Level::latest()->get()
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
        $petugas = $request->validate([
            'nama_petugas_15480' => 'required',
            'username_15480' => 'required',
            'telp_15480' => 'required|numeric',
        ]);

        $petugas['password_15480'] = $request->old_password;
        Petugas::where('id_15480', $id)->update($petugas);
        return redirect('/petugas');
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

        return redirect('petu');
    }
}
