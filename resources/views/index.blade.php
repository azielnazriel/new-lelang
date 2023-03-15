<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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

    <!-- ***** Loading ***** -->
    {{-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div> --}}


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            Lelang Online
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">Barang</a></li>
                            {{-- <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Testimonials</a>
                            </li> --}}
                            {{-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="" class="menu-item">About Us</a></li>
                                    <li><a href="" class="menu-item">Features</a></li>
                                    <li><a href="" class="menu-item">FAQ's</a></li>
                                    <li><a href="" class="menu-item">Blog</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li> --}}
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <img src="/landingpage/images/inpo-bg.png" width="650" style="float:right">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1> SIMPLE WEBSITE <em>LELANGKU</em></h1>
                        {{-- <p>Lelang <a href="#">HTML landing page</a> lelangku is provided by <a href="#">Lelangku</a>.
                           You can modify and use it for your commercial websites for free of charge. LelangKu is last updated on 20 Januari 2023.</p>  --}}
                        <a href="#about" class="main-button-slider">TAWAR SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="text-center mb-8" >
        <h1 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Cari dan Tawar Barang di 
        <em style="color:rgb(245, 209, 89);">LELANGKU</em></h1>
    </div>

    <section class="section" id="about">
        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="/img/wkwk.jpg" alt="" style="margin-top:-30px;">
                            <h4>Apayaa</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href="#testimonials" class="main-button">
                                Tawar
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="/img/awal2.jpg" alt="" style="margin-top:-30px;">
                            <h4>Lukisan</h4>
                            <p>Curabitur pulvinar vel odio sed sagittis. Nam maximus ex diam, nec consectetur diam.</p>
                            <a href="#testimonials" class="main-button">
                               Tawar
                            </a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        @foreach ($lelang as $item)                          
                          <!-- Modal -->
                          <div class="modal fade" id="tawarModal{{$item->id_15480}}" tabindex="-1" aria-labelledby="tawarModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="tawarModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>

                            <div class="features-icon">
                                @if ($item->barang->gambar_15480)
                                    <img  src='{{ url('storage/' . $item->barang->gambar_15480) }}' alt="" style="margin-top: -30px"> 
                                @endif
                                <h4>{{ $item->barang->nama_barang_15480}}</h4> 
                                <p>{{$item->barang->deskripsi_15480}}</p>
                                <a class="main-button text-white" data-toggle="modal" data-target="#tawarModal{{$item->id_15480}}">Tawar</a>
                                <a href="#testimonials" class="main-button">History</a>
                            </div>
                        @endforeach
                    </div>
                </div>
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
                    <div class="right-content col-lg-6 col-md-12 col-sm-12" >
                        <h2>More About <em>LelangKu</em></h2>
                        <p>Lelang adalah proses membeli dan menjual barang atau jasa dengan cara menawarkan kepada penawar,
                           peserta lelang memberikan penawaran harga lebih tinggi, dan kemudian barang terjual kepada penawar harga tertinggi.
                           Lelang online dilakukan di website ini dan peserta lelang bisa mengikutinya secara daring. Jenis lelang ini lebih digemari, mengingat tidak memerlukan waktu dan tenaga yang besar karena bisa dilakukan di mana saja
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