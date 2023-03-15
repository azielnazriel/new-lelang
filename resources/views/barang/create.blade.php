@extends('layouts.dashboard')

@section('content')
<form action="/barang" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-4">
        <label for="barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control text-dark"
            name="nama_barang_15480" placeholder="Masukan Barang " value="">
    </div>
    <div class="mb-4">
        <label for="date" class="form-label">tanggal</label>
        <input type="date" class="form-control text-dark"
            name="tgl_15480" placeholder="date" value="">
    </div>
    <div class="mb-4">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control text-dark"
            name="nama_lengkap_15480" placeholder="masukan nama" value="">
    </div>
    <div class="mb-4">
        <label for="harga" class="form-label">Harga Awal</label>
        <input type="text" class="form-control text-dark"
            name="harga_awal_15480" placeholder="Masukan Harga" value="">
    </div>
    <div class="mb-4">
        <label for="deskripsi" class="form-label"> Deskripsi</label>
        <input type="text" class="form-control text-dark"
            name="deskripsi_15480" placeholder="Deskripsi" value="">
    </div>
    <div class="mb-4">
        <label for="gambar" class="form-label"> gambar</label>
        <div>
        <input type="file" class="form-control text-dark" name="gambar_15480" id="gambar" value="">
        </div>
    </div>

     <button type="submit" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
</form>
@endsection