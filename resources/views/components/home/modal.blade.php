@foreach ($lelang as $item)
    <!-- Tawar Modal -->
    <div class="modal fade" id="tawarModal{{ $item->id_15480 }}" tabindex="-1" aria-labelledby="tawarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tawarModalLabel">Penawaran {{ $item->barang->nama_barang_15480 }}
                    </h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('penawaran', $item->id_15480) }}" method="POST">
                    <div class="modal-body">

                        <div class="row justify-content-center px-1">
                            @csrf
                            <img src="{{ asset('storage/' . $item->barang->gambar_15480) }}" alt="Image"
                                class="img-fluid d-inline-block">
                            <label for="penawaran_harga_15480"></label>
                            <input type="number" name="penawaran_harga_15480" id="penawaran_harga_15480"
                                class="form-control d-inline-block" placeholder="Masukan Penawaran Harga"
                                min="{{ $item->getMinBid() }}" required>
                            <p class="text-primary text-start">Min Penawaran: {{ $item->getMinBid() }}</p>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn main-button">Tawar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Tawar Modal -->
    <div class="modal fade" id="historyModal{{ $item->id_15480 }}" tabindex="-1" aria-labelledby="tawarModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tawarModalLabel">History {{ $item->barang->nama_barang_15480 }}
                    </h1>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>
                <div class="modal-body row justify-content-center w-100">
                    <div class="table-responsive">
                        <table class="table">
                            <tr style="background-color: rgb(245, 209, 89);">
                                <td>Nama</td>
                                <td>Penawaran</td>
                            </tr>
                            @foreach ($item->historyLelang as $subItem)
                                <tr>
                                    <td>{{ $subItem->user->nama_lengkap_15480 }}</td>
                                    <td>{{ $subItem->penawaran_harga_15480 }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" data-dismiss="modal" class="btn btn-danger">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

<!-- History Menang Modal -->
<div class="modal fade" id="historyMenangModal" tabindex="-1" aria-labelledby="historyMenangModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="historyMenangModalLabel">History Menang
                </h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body row justify-content-center w-100">
                <div class="table-responsive">
                    <table class="table">
                        <tr style="background-color: rgb(245, 209, 89);">
                            <td>Nama Barang</td>
                            <td>Harga</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach ($myWinnerHistory as $item)
                            <tr>
                                <td>{{ $item->nama_barang_15480 }}</td>
                                <td>{{ $item->penawaran_harga_15480 }}</td>
                                <td>
                                    <a href="#">
                                        Downlaod Invoice
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" data-dismiss="modal" class="btn btn-danger">Tutup</button>
            </div>
        </div>
    </div>
</div>
