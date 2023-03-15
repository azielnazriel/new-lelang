@extends('layouts.dashboard')

@section('content')
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>user</th>
                <th>penawaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($history as $item)
                <tr>
                    <th>{{ $item->user->nama_lengkap_15480 }}</th>

                    <th>{{ $item->penawaran_harga_15480 }}</th>
                    <th>
                        @if ($lelang->status_15480 == 'dibuka')
                            <form action="{{ route('history.winner', [$lelang->id_15480, $item->id_15480]) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-warning">Jadikan Pemenang</button>
                            </form>
                        @else
                            @if ($item->id_15480 == $idHistoryPemenang)
                                <button type="button" class="btn btn-sm btn-success">Menang</button>
                            @else
                                <button type="button" class="btn btn-sm btn-danger">Kalah</button>
                            @endif
                        @endif

                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('history.create', ['idLelang' => $lelang->id_15480]) }}" class="btn text-white"
        style="background-color: #F58452; text-decoration:none; margin-left:15px;"> Create</a>
@endsection
