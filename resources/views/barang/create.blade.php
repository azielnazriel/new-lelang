@extends('layouts.dashboard')

@section('content')
    <form action="/barang" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nama_barang_15480" class="form-label">Nama Barang</label>
            <input type="text" id="nama_barang_15480"
                class="form-control text-dark @error('nama_barang_15480') is-invalid @enderror" name="nama_barang_15480"
                placeholder="Masukan Barang " value="{{ old('nama_barang_15480') }}" required autofocus>
            @error('nama_barang_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="tgl_15480" class="form-label">tanggal</label>
            <input type="date" id="tgl_15480" class="form-control text-dark @error('tgl_15480') is-invalid @enderror"
                name="tgl_15480" placeholder="date" value="{{ old('tgl_15480') }}">
            @error('tgl_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="harga_awal_15480" class="form-label">Harga Awal</label>
            <input type="text" id="harga_awal_15480"
                class="form-control text-dark @error('harga_awal_15480') is-invalid @enderror" name="harga_awal_15480"
                placeholder="Masukan Harga" value="{{ old('harga_awal_15480') }}">
            @error('harga_awal_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="deskripsi_15480" class="form-label">Deskripsi</label>
            <textarea name="deskripsi_15480" id="deskripsi_15480"
                class="form-control text-dark @error('deskripsi_15480') is-invalid @enderror" cols="30" rows="10"
                required>
                    {{ old('deskripsi_15480') }}
                </textarea>
            @error('deskripsi_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="gambar_15480" class="form-label">Gambar</label>

            <input type="file" class="form-control text-dark @error('gambar_15480') is-invalid @enderror"
                name="gambar_15480" id="gambar_15480">
            @error('gambar_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
