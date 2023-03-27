<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        Lelangku 
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                        <li class="scroll-to-section"><a href="#about" class="menu-item">Barang</a></li>
                        <li>
                            <a class="menu-item" href="#" data-toggle="modal"
                                data-target="#historyMenangModal">History
                                Menang</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="post" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-transparent mt-1">LOGOUT</button>
                            </form>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
