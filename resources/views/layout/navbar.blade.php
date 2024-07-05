<header class="mb-5">
    <!--Nama Perusahaan-->
    <div class="header-top">
        <div class="container justify-content-center">
            <div class="logo">
                <img src="{{ asset('assets/compiled/svg/logo-text.svg') }}" height="500" alt="Logo">
            </div>
            {{-- <h1>PALOPO VESPA CLUB</h1> --}}
        </div>

        <!-- Burger button responsive -->
        {{-- <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a> --}}
    </div>

    <!--Navbar-->
    <nav class="main-navbar">
        <div class="container">
            <ul>
                <!--Profile-->
                <li class="menu-item  ">
                    <a href="{{ route('profile') }}" class='menu-link'>
                        <span> Profile</span>
                    </a>
                </li>

                <!--Visi dan Misi-->
                <li class="menu-item  ">
                    <a href="{{ route('visiMisi') }}" class='menu-link'>
                        <span></i> Visi dan Misi</span>
                    </a>
                </li>

                <!--Prodiuk Kami-->
                <li class="menu-item  ">
                    <a href="{{ route('produk') }}" class='menu-link'>
                        <span></i> Produk Kami</span>
                    </a>
                </li>

                <!--Kontak Kami-->
                <li class="menu-item  ">
                    <a href="{{ route('kontak') }}" class='menu-link'>
                        <span></i> Kontak Kami</span>
                    </a>
                </li>

                <!--About Us-->
                <li class="menu-item  ">
                    <a href="{{ route('aboutUs') }}" class='menu-link'>
                        <span></i> About Us</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>
