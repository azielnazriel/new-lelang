@extends('layouts.dashboard')

@section('content')
    <form action="/barang/{{ $barang->id_15480 }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="hidden" name="old_gambar" value="{{ $barang->gambar_15480 }}">
        <div class="mb-4">
            <label for="barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control text-dark" name="nama_barang_15480" placeholder="Masukan Barang "
                value="{{ old('nama_barang_15480', $barang->nama_barang_15480) }}" required autofocus>
            @error('nama_barang_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="date" class="form-label">tanggal</label>
            <input type="date" class="form-control text-dark" name="tgl_15480" placeholder="date"
                value="{{ old('tgl_15480', $barang->tgl_15480) }}" required>
            @error('tgl_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="harga" class="form-label">Harga Awal</label>
            <input type="text" class="form-control text-dark" name="harga_awal_15480" placeholder="Masukan Harga"
                value="{{ old('harga_awal_15480', $barang->harga_awal_15480) }}" required>
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
                    {{ old('deskripsi_15480', $barang->deskripsi_15480) }}
                </textarea>
            @error('deskripsi_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="foto" class="form-label">Foto</label>
            <br>
            <img src="{{ asset('storage/' . $barang->gambar_15480) }}" class="img-fluid" alt="Image">
            <br>
            <input type="file" class="form-control text-dark  @error('gambar_15480') is-invalid @enderror"
                name='gambar_15480' id="foto">
            @error('gambar_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @else
                Gambar Akan Diganti Jika Field Diisi
            @enderror

        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
