@extends('layouts.dashboard')

@section('content')
<form action="/lelang" method="POST">
    @csrf
    <div class="mb-4">
        <label for="id_barang_15480" class="form-label">Barang</label>
        <select name="id_barang_15480" class="form-control" id="id_barang_15480" required>
            @foreach ($barang as $item)
                <option value="{{ $item->id_15480 }}">{{ $item->nama_barang_15480 }}</option>
            @endforeach
        </select>
    </div>

     <button type="submit" class="btn text-white" style="background-color: #F58452; text-decoration:none; margin-left:15px;">Simpan</button>
</form>
@endsection