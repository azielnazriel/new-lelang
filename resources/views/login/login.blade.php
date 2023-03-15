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
                        style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Login Lelang</h2>
                            <form action="{{ route('login.authenticate') }}" method="POST">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input name="username_15480" type="username" id="username_15480"
                                        class="form-control" value="{{ old('username_15480') }}" placeholder="Username"
                                        style="font-size:20px;" required autofocus>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="password_15480" type="password" id="password_15480"
                                        class="form-control" placeholder="Password" style="font-size:20px;" required />
                                </div>
                                <div class="form-outline mb-4">
                                    <select name="role" class="form-control text-capitalize">
                                        <option value="user" class="text-capitalize">Users</option>
                                        <option value="petugas" class="text-capitalize">Petugas</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block mb-4 text-white"
                                    style="background:#FBA70B; width:515px; font-size:20px;">
                                    Login
                                </button>

                                <p class="message">Belum Punya Akun?
                                    <a href="{{ route('register') }}">Registrasi</a>
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
