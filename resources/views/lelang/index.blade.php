@extends('layouts.dashboard')

@section('content')
    <table class="table table-resposive text-center" style="font-family: 'Times New Roman', Times, serif">
        <thead class="text-white" style="background-color: #F58452">
            <tr>
                <th>tanggal lelang</th>
                <th>harga akhir</th>
                <th>pemenang</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lelang as $item)
                <tr>
                    <th>{{ $item->tgl_lelang_15480 }}</th>

                    @if ($item->harga_akhir_15480)
                        <th>{{ $item->harga_akhir_15480 }}</th>
                    @else
                        <th class="text-danger">Harga Akhir Belum Ditentukan</th>
                    @endif

                    @if ($item->user)
                        <th>{{ $item->user->nama_lengkap_15480 }}</th>
                    @else
                        <th class="text-danger">Pemenang Belum Ditentukan</th>
                    @endif

                    <th>{{ $item->status_15480 }}</th>
                    <th>
                        <a href="{{ route('lelang.show', $item->id_15480) }}" class="btn btn-sm btn-warning">History</a>
                    </th>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('lelang.create') }}" class="btn text-white"
        style="background-color: #F58452; text-decoration:none; margin-left:15px;">Create</a>
    <a class="btn btn-primary ms-3" data-toggle="modal" data-target="#generateLaporanModal">Generate Laporan</a>
@endsection
