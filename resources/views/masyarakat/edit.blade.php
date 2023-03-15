@extends('layouts.dashboard')

@section('content')
<form action="/masyarakat/{{$masyarakat->id_15480}}" method="POST">
    @method('put')
    @csrf
    <input type="hidden" name="old_password" value="{{ old('username_15480', $masyarakat->password_15480) }}">

    <div class="mb-4">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control text-dark"
            name="nama_lengkap_15480" placeholder="Masukan Nama Disini"  value="{{ old('nama_lengkap_15480', $masyarakat->nama_lengkap_15480) }}">
    </div>
    <div class="mb-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control text-dark"
            name="username_15480" placeholder="Masukan Username"  value="{{ old('username_15480', $masyarakat->username_15480) }}">
    </div>
    <div class="mb-4">
        <label for="nomer" class="form-label">No Telp</label>
        <input type="text" class="form-control text-dark"
            name="telp_15480" placeholder="Masukan Nomer"  value="{{ old('telp_15480', $masyarakat->telp_15480) }}">
    </div>

     <button type="submit" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
</form>
@endsection