@extends('layouts.dashboard')

@section('content')
    <form action="{{ route('petugas.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_petugas_15480" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama_petugas_15480"
                class="form-control text-dark @error('nama_petugas_15480') is-invalid @enderror" name="nama_petugas_15480"
                placeholder="Masukan Nama Disini" value="{{ old('nama_petugas_15480') }}" required autofocus>
            @error('nama_petugas_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="username_15480" class="form-label">Username</label>
            <input type="text" id="username_15480"
                class="form-control text-dark @error('username_15480') is-invalid @enderror" name="username_15480"
                placeholder="Masukan Username" value="{{ old('username_15480') }}" required>
            @error('nama_petugas_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password_15480" class="form-label">Password</label>
            <input type="password" id="password_15480"
                class="form-control text-dark @error('password_15480') is-invalid @enderror" name="password_15480"
                placeholder="Masukan password" required>
            @error('password_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="id_level_15480" class="form-label">Level</label>
            <select name="id_level_15480" id="id_level_15480"
                class="form-control text-capitalize @error('id_level_15480') is-invalid @enderror" required>
                @foreach ($level as $item)
                    @if ($item->id_level_15480 == old('id_level_15480'))
                        <option value="{{ $item->id_level_15480 }}" class="text-capitalize" selected>{{ $item->nama_15480 }}
                        </option>
                    @else
                        <option value="{{ $item->id_level_15480 }}" class="text-capitalize">{{ $item->nama_15480 }}</option>
                    @endif
                @endforeach
            </select>
            @error('id_level_15480')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
