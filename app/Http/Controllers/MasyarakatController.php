<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masyarakat.index', [
            'header' => 'Data Masyarakat',
            'masyarakat' => Masyarakat::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.create', [
            'header' => 'Data Masyarakat',
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
        $masyarakat = $request->validate([
            'nama_lengkap_15480' => 'required',
            'username_15480' => 'required|unique:masyarakats_15480',
            'password_15480' => 'required',
            'telp_15480' => 'required|numeric',

        ]);
        $masyarakat['password_15480'] = Hash::make($request->password_15480);
        Masyarakat::create($masyarakat);
        return redirect('/masyarakat');
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
        return view('masyarakat.edit', [
            'header' => 'Edit Masyarakat',
            'masyarakat' => Masyarakat::where('id_15480', $id)->firstOrFail()
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
        $masyarakat = $request->validate([
            'nama_lengkap_15480' => 'required',
            'username_15480' => 'required',
            'telp_15480' => 'required|numeric',
        ]);

        $masyarakat['password_15480'] = $request->old_password;
        Masyarakat::where('id_15480', $id)->update($masyarakat);
        return redirect('/masyarakat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Masyarakat::where('id_15480', $id)->delete();

        return redirect('masyarakat');
    }
}
