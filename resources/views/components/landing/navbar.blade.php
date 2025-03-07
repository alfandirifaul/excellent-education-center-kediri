<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-xl-2 col-lg-2 col-5">
            <div class="logo">
                <a href={{ route('home') }}>
                    <img src={{ asset("img/logo/logo.png") }} alt="">
                </a>
            </div>
        </div>
        <div class="col-xl-7 col-lg-8 d-none d-lg-block">
            <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                <div class="nav-container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}" id="navbarDropdown5" role="button"  aria-expanded="false">Beranda</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('about') }}"id="navbarDropdown5" role="button"  aria-expanded="false">Tentang</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('price') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('price') }}" id="navbarDropdown5" role="button"  aria-expanded="false">Harga</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}" id="navbarDropdown5" role="button"  aria-expanded="false">Kontak</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-xl-3 col-lg-2 col-7">
            <div class="right-nav d-flex align-items-center justify-content-end">
                <div class="right-btn mr-25 mr-xs-15">
                    <ul class="d-flex align-items-center">
                        @auth
                            <li><a href="" class="theme_btn free_btn">Dashboard</a></li>
                        @else
                            <li><a href="" class="theme_btn free_btn hover:border_btn">Masuk</a></li>
                            <li><a href="" class="free_btn border_btn theme_btn ml-10">Daftar</a></li>
                        @endauth
                        {{-- <li><a class="sign-in ml-20" href="login.html"><img src={{ asset("img/icon/user.svg") }} alt=""></a></li> --}}
                    </ul>
                </div>
                <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                    <a href="javascript:void(0);">
                        <i class="far fa-bars"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
