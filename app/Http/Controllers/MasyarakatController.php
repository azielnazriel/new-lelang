<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{
    public function index()
    {
        return view('masyarakat.index', [
            'header' => 'Data Masyarakat',
            'masyarakat' => Masyarakat::latest()->get()

        ]);
    }

    public function create()
    {
        return view('masyarakat.create', [
            'header' => 'Data Masyarakat',
        ]);
    }

    public function store(Request $request)
    {
        $masyarakat = $request->validate([
            'nama_lengkap_15480' => 'required|max:255',
            'username_15480' => 'required|unique:masyarakats_15480|max:255',
            'password_15480' => 'required',
            'telp_15480' => 'required|numeric',

        ]);
        $masyarakat['password_15480'] = Hash::make($request->password_15480);
        Masyarakat::create($masyarakat);
        return redirect()->route('masyarakat.index');
    }

    public function edit($id)
    {
        return view('masyarakat.edit', [
            'header' => 'Edit Masyarakat',
            'masyarakat' => Masyarakat::where('id_15480', $id)->firstOrFail()
        ]);
    }

    public function update(Request $request, $id)
    {
        $masyarakat = $request->validate([
            'nama_lengkap_15480' => 'required|max:255',
            'username_15480' => 'required|max:25',
            'telp_15480' => 'required|numeric',
        ]);

        $masyarakat['password_15480'] = $request->old_password;
        Masyarakat::where('id_15480', $id)->update($masyarakat);

        return redirect()->route('masyarakat.index');
    }

    public function destroy($id)
    {
        Masyarakat::where('id_15480', $id)->delete();

        return redirect()->route('masyarakat.index');
    }
}
