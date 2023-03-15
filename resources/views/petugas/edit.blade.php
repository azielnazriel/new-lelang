@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('petugas.update', $petugas->id_15480) }}" method="POST">
        @method('put')
        @csrf
        <div class="mb-4">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control text-dark" name="nama_petugas_15480" placeholder="Masukan Nama Disini"
                value="{{ old('nama_petugas_15480', $petugas->nama_petugas_15480) }}">
        </div>
        <div class="mb-4">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control text-dark" name="username_15480" placeholder="Masukan Username"
                value="{{ old('username_15480', $petugas->username_15480) }}">
        </div>
        <div class="mb-4">
            <label for="level" class="form-label">Level</label>
            <select name="id_level_15480" class="form-control text-capitalize" id="level" required>
                @foreach ($level as $item)
                    <option value="{{ $item->id_level_15480 }}" class="text-capitalize">{{ $item->nama_15480 }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
