@extends('layouts.dashboard')

@section('content')
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($petugas as $item)
                <tr>
                    <th>{{ $item->nama_petugas_15480 }}</th>
                    <th>{{ $item->username_15480 }}</th>
                    <th>
                        <a href="{{ route('petugas.edit', $item->id_15480) }}" class="btn btn-sm btn-warning">Update</a>
                        <form action="{{ route('petugas.destroy', $item->id_15480) }}" method="post" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('petugas.create') }}" class="btn text-white"
        style="background-color: #F58452; text-decoration:none; margin-left:15px;"> Create</a>
@endsection
