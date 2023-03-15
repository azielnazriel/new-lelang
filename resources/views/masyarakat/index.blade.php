@extends('layouts.dashboard')

@section('content')
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>Nama Masyarakat</th>
                <th>Username</th>
                <th>No telpn</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($masyarakat as $item)
                <tr>
                    <th>{{ $item->nama_lengkap_15480 }}</th>
                    <th>{{ $item->username_15480 }}</th>
                    <th>{{ $item->telp_15480 }}</th>
                    <th>
                        <a href="{{ route('masyarakat.edit', $item->id_15480) }}" class="btn btn-sm btn-warning">Update</a>
                        <form action="{{ route('masyarakat.destroy', $item->id_15480) }}" method="post"
                            class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('masyarakat.create') }}" class="btn text-white"
        style="background-color: #F58452; text-decoration:none; margin-left:15px;">Create</a>
@endsection
