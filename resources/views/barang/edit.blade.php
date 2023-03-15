@extends('layouts.dashboard')

@section('content')

<form action="/barang/{{$barang->id_15480}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <input type="hidden" name="old_gambar" value="{{$barang->gambar_15480}}">
    <div class="mb-4">
        <label for="barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control text-dark"
            name="nama_barang_15480" placeholder="Masukan Barang "  value="{{ old('nama_barang_15480', $barang->nama_barang_15480) }}">
    </div>
    <div class="mb-4">
        <label for="date" class="form-label">tanggal</label>
        <input type="date" class="form-control text-dark"
            name="tgl_15480" placeholder="date"  value="{{ old('tgl_15480', $barang->tgl_15480) }}">
    </div>
    <div class="mb-4">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control text-dark"
            name="nama_lengkap_15480" placeholder="masukan nama"  value="{{ old('nama_lengkap_15480', $barang->nama_lengkap_15480) }}">
    </div>
    <div class="mb-4">
        <label for="harga" class="form-label">Harga Awal</label>
        <input type="text" class="form-control text-dark"
            name="harga_awal_15480" placeholder="Masukan Harga"  value="{{ old('harga_awal_15480', $barang->harga_awal_15480) }}">
    </div>
    <div class="mb-4">
        <label for="deskripsi" class="form-label"> Deskripsi</label>
        <input type="text" class="form-control text-dark"
            name="deskripsi_15480" placeholder="Deskripsi"  value="{{ old('deskripsi_15480', $barang->deskripsi_15480) }}">
    </div>   
    {{-- <img style='max-height:100px;max-width:100px' /> --}}
    <div class="mb-4">
        <label for="foto" class="form-label"> Foto</label>
        <input type="file" class="form-control text-dark" name='gambar_15480' id="foto">
    </div> 

     <button type="submit" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
</form>
@endsection