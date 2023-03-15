@extends('layouts.dashboard')

@section('content')
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>Nama Barang</th>
                <th>Tanggal</th>
                <th>Harga Awal</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barang as $item)
                <tr>
                    <th>{{ $item->nama_barang_15480 }}</th>
                    <th>{{ $item->tgl_15480 }}</th>
                    <th>{{ $item->harga_awal_15480 }}</th>
                    <th>{{ $item->deskripsi_15480 }}</th>
                    <th>
                        @if ($item->gambar_15480)
                            <img style='max-height:50px;max-width:50px' src='{{ url('storage/' . $item->gambar_15480) }}' />
                        @endif
                    <th>
                        <a href="{{ route('barang.edit', $item->id_15480) }}" class="btn btn-sm btn-warning">Update</a>
                        <form action="{{ route('barang.destroy', $item->id_15480) }}" method="post" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('barang.create') }}" class="btn text-white"
        style="background-color: #F58452; text-decoration:none; margin-left:15px;"> Create</a>
@endsection
