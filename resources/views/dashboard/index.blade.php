@extends('layouts.dashboard')

@section('content')
    {{-- <h1>contoh</h1> --}}

        <div class="container" id=""contact-us>
            <div class="footer-content ">
                <div class="row d-flex justify-content-center" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em style="color:#FBA70B;">LelangKu</em></h2>
                        <p >Lelang adalah proses membeli dan menjual barang atau jasa dengan cara menawarkan kepada
                            penawar,
                            peserta lelang memberikan penawaran harga lebih tinggi, dan kemudian barang terjual kepada
                            penawar harga tertinggi.
                            Lelang online dilakukan di website ini dan peserta lelang bisa mengikutinya secara daring.
                            Jenis lelang ini lebih digemari, mengingat tidak memerlukan waktu dan tenaga yang besar
                            karena bisa dilakukan di mana saja
                    </div>
                </div>

                {{-- <section class="section" id="about">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="features-item">
                            @foreach ($lelang as $item)
                                <div class="features-icon">
                                    @if ($item->barang->gambar_15480)
                                        <img src='{{ url('storage/' . $item->barang->gambar_15480) }}' alt="Image"
                                            style="margin-top: -30px">
                                    @endif
                                    <h4>{{ $item->barang->nama_barang_15480 }}</h4>
                                    <p>{{ $item->barang->deskripsi_15480 }}</p>
                                    
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section> --}}
            </div>
        </div>
@endsection
