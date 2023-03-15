@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('history.store', $idLelang) }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="id_masyarakat_15480" class="form-label">Nama Masyarakat</label>
            <select name="id_masyarakat_15480" class="form-control" id="id_masyarakat_15480" required autofocus>
                @foreach ($users as $item)
                    <option value="{{ $item->id_15480 }}">{{ $item->nama_lengkap_15480 }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="penawaran_harga_15480" class="form-label">Penawaran Harga</label>
            <input type="number" id="penawaran_harga_15480"
                class="form-control text-dark @error('penawaran_harga_15480') is-invalid @enderror"
                name="penawaran_harga_15480" placeholder="Masukan Barang " value="{{ old('penawaran_harga_15480') }}"
                required>
            @error('penawaran_harga_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
