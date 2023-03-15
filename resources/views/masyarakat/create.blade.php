@extends('layouts.dashboard')

@section('content')
    <form action="/masyarakat" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama_lengkap_15480" class="form-label">Nama Lengkap</label>
            <input type="text" id="nama_lengkap_15480"
                class="form-control text-dark @error('nama_lengkap_15480') is-invalid @enderror" name="nama_lengkap_15480"
                placeholder="Masukan Nama Disini" value="{{ old('nama_lengkap_15480') }}" required autofocus>
            @error('nama_lengkap_15480')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="username_15480" class="form-label">Username</label>
            <input type="text" id="username_15480"
                class="form-control text-dark @error('username_15480') is-invalid @enderror" name="username_15480"
                placeholder="Masukan Username" value="{{ old('username_15480') }}" required>
            @error('username_15480')
                <div>
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
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="telp_15480" class="form-label">No Telp</label>
            <input type="number" id="telp_15480" class="form-control text-dark @error('telp_15480') is-invalid @enderror"
                name="telp_15480" placeholder="Masukan Nomer" value="{{ old('telp_15480') }}">
            @error('telp_15480')
                <div>
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn text-white"
            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
    </form>
@endsection
