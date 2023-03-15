<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="/css/warna.css">
<!-- Section: Design Block -->

<section class="text-center text-lg-start">
    <style>
        section {
            background-color: #F47A46;
            /* background-image: url("/img/awal2.jpg"); */
        }

        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <body>
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right"
                        style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Registrasi Lelang</h2>
                            <form action="{{ route('register.create') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="nama_lengkap_15480" name="nama_lengkap_15480" id="nama_lengkap_15480"
                                        class="form-control @error('nama_lengkap_15480') is-invalid @enderror"
                                        placeholder="Nama" style="font-size:20px;"
                                        value="{{ old('nama_lengkap_15480') }}" required autofocus />
                                    @error('nama_lengkap_15480')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" name="username_15480" id="username_15480"
                                        class="form-control @error('username_15480') is-invalid @enderror"
                                        placeholder="Username" style="font-size:20px;"
                                        value="{{ old('username_15480') }}" required />
                                    @error('username_15480')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="number" name="telp_15480" id="telp_15480"
                                        class="form-control @error('telp_15480') is-invalid @enderror"
                                        placeholder="No. Telepon" style="font-size:20px;"
                                        value="{{ old('telp_15480') }}" required />
                                    @error('telp_15480')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password_15480" id="password_15480"
                                        class="form-control @error('password_15480') is-invalid @enderror"
                                        placeholder="Password" style="font-size:20px;" required />
                                    @error('password_15480')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-block mb-4 text-white"
                                    style="background:#FBA70B; width:515px; font-size:20px;">
                                    Daftar
                                </button>

                                <p class="message">Sudah Punya Akun?
                                    <a href="{{ route('login') }}">Masuk</a>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="/img/wkwk.jpg" class="rounded-4 shadow-4" style="width: 580px; height:750px;"
                        alt="" />
                </div>
            </div>
        </div>
    </body>
</section>
