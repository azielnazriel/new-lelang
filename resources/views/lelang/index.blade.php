@extends('layouts.dashboard')

@push('lelang-modal')
    <div class="modal fade" id="generateLaporanModal" tabindex="-1" aria-labelledby="generateLaporanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-dark" id="generateLaporanModalLabel">Generate Laporan
                    </h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="{{ route('lelang.export') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-4">
                            <label class="form-label" for="date_start">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="date_start" id="date_start" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="date_finish">Tanggal Berakhir</label>
                            <input type="date" class="form-control" name="date_finish" id="date_finish" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="status">Status</label>
                            <select name="status" class="form-control" id="status" required>
                                <option value="semua">Semua Status</option>
                                <option value="dibuka">Dibuka</option>
                                <option value="ditutup">Ditutup</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white"
                            style="background-color: #F58452; text-decoration:none; margin-left:15px;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endpush

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
