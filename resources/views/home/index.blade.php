<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Lelang Masyarakat</title>
    <!--

Lava Landing Page

https://templatemo.com/tm-540-lava-landing-page

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="landingpage/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="landingpage/css/font-awesome.css">
    <link rel="stylesheet" href="landingpage/css/templatemo-lava.css">
    <link rel="stylesheet" href="landingpage/css/owl-carousel.css">

</head>

<body>
    @include('components.home.navbar')
    @include('components.home.welcome')
    @include('components.home.modal')

    <div class="text-center mb-8">
        <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Cari dan Tawar Barang di
            <em style="color:rgb(245, 209, 89);">LELANGKU</em>
        </h1>
    </div>

    <section class="section" id="about">
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
                        <a class="main-button text-white" data-toggle="modal"
                            data-target="#tawarModal{{ $item->id_15480 }}">Tawar</a>
                        <a class="main-button text-white" data-toggle="modal"
                            data-target="#historyModal{{ $item->id_15480 }}">History</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="left-image-decor"> </div>


    {{-- </ul>
                </div>
            </div>
        </div>
    </section>
    --}}

    <div class="right-image-decor"></div>



    <!-- ***** Footer  ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content ">
                <div class="row d-flex justify-content-center">
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2>More About <em>LelangKu</em></h2>
                        <p>Lelang adalah proses membeli dan menjual barang atau jasa dengan cara menawarkan kepada
                            penawar,
                            peserta lelang memberikan penawaran harga lebih tinggi, dan kemudian barang terjual kepada
                            penawar harga tertinggi.
                            Lelang online dilakukan di website ini dan peserta lelang bisa mengikutinya secara daring.
                            Jenis lelang ini lebih digemari, mengingat tidak memerlukan waktu dan tenaga yang besar
                            karena bisa dilakukan di mana saja
                            {{-- <br><br>If you need this contact form to send email to your inbox, you may follow our <a
                                rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a> page
                            for more detail.</p> --}}
                            {{-- <ul class="social">
                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p class="text-center text-white">Copyright &copy;
                          LelangKu Website 2023
                        | Designed by <a rel="nofollow" href="https://templatemo.com">Nazril</a></p>
                    </div>
                </div>
            </div> --}}
        </div>
    </footer>

    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> --}}

    <!-- jQuery -->
    <script src="landingpage/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="landingpage/js/popper.js"></script>
    <script src="landingpage/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="landingpage/js/owl-carousel.js"></script>
    <script src="landingpage/js/scrollreveal.min.js"></script>
    <script src="landingpage/js/waypoints.min.js"></script>
    <script src="landingpage/js/jquery.counterup.min.js"></script>
    <script src="landingpage/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="landingpage/js/custom.js"></script>

</body>

</html>
