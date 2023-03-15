@extends('layouts.dashboard')

@section('content')
<form action="/petu" method="POST">
    @csrf
    <div class="mb-4">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control text-dark"
            name="nama_petugas_15480" placeholder="Masukan Nama Disini" value="{{old('nama_petugas_15480')}}">
    </div>
    <div class="mb-4">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control text-dark"
            name="username_15480" placeholder="Masukan Username" value="{{old('username_15480')}}">
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control text-dark"
            name="password_15480" placeholder="Masukan password" value="">
    </div>
    <div class="mb-4">
        <label for="level" class="form-label">Level</label>
        <select name="id_level_15480" class="form-control text-capitalize" id="level" required>
            @foreach ($level as $item)
                @if ($item->id_level_15480 == old('id_level_15480'))
                    <option value="{{$item->id_level_15480}}" class="text-capitalize" selected>{{ $item->nama_15480 }}</option>   
                @else
                    <option value="{{$item->id_level_15480}}" class="text-capitalize">{{ $item->nama_15480 }}</option>   
                @endif
            @endforeach
        </select>
    </div>

     <button type="submit" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
</form>
@endsection