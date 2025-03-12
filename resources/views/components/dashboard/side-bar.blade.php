@props(['user'])

<aside class="sidebar">
    <!-- sidebar close btn -->
    <button type="button"
        class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i
            class="ph ph-x"></i></button>
    <!-- sidebar close btn -->

    <a href="{{ route('siswa-dashboard.index') }}"
        class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
        <img src={{ asset('img/logo/logo.png') }} alt="EEC Logo"
            class="sm:w-80 sm:h-60 lg:w-100 lg:h-100 md:w-100 md:h-auto">
    </a>

    <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
        <div class="p-20 pt-10">
            @if ($user->hasRole('siswa'))
                <ul class="sidebar-menu">
                    <li class="sidebar-menu__item">
                        <a href="{{ route('siswa-dashboard.index') }}"
                            class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.index') ? 'activePage' : '' }}">
                            <span class="icon"><i class="ph ph-squares-four"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>

                    @if (optional($user->siswa)->kelas_id && $user->hasActiveSubscription())
                        <li class="sidebar-menu__item">
                            <a href=""
                                class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.kelas*') ? 'activePage' : '' }}">
                                <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                                <span class="text">Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-menu__item">
                            <a href="assignment.html"
                                class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.tugas*') ? 'activePage' : '' }}">
                                <span class="icon"><i class="ph ph-clipboard-text"></i></span>
                                <span class="text">Tugas</span>
                            </a>
                        </li>
                        <li class="sidebar-menu__item">
                            <a href="library.html"
                                class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.bank-soal*') ? 'activePage' : '' }}">
                                <span class="icon"><i class="ph ph-books"></i></span>
                                <span class="text">Bank Soal</span>
                            </a>
                        </li>
                        <li class="sidebar-menu__item">
                            <a href="resources.html"
                                class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.kuis*') ? 'activePage' : '' }}">
                                <span class="icon"><i class="ph ph-bookmarks"></i></span>
                                <span class="text">Kuis</span>
                            </a>
                        </li>
                        <li class="sidebar-menu__item">
                            <a href="message.html"
                                class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.pesan*') ? 'activePage' : '' }}">
                                <span class="icon"><i class="ph ph-chats-teardrop"></i></span>
                                <span class="text">Kotak Pesan</span>
                            </a>
                        </li>
                    @endif

                    <li class="sidebar-menu__item">
                        <a href="{{ route('siswa-dashboard.price') }}"
                            class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.price') ? 'activePage' : '' }}">
                            <span class="icon"><i class="ph ph-coins"></i></span>
                            <span class="text">Berlangganan</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item">
                        <span
                            class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
                    </li>
                    <li class="sidebar-menu__item">
                        <a href="{{ route('siswa-dashboard.settings') }}"
                            class="sidebar-menu__link {{ request()->routeIs('siswa-dashboard.settings') ? 'activePage' : '' }}">
                            <span class="icon"><i class="ph ph-gear"></i></span>
                            <span class="text">Pengaturan Akun</span>
                        </a>
                    </li>

                    <li class="sidebar-menu__item has-dropdown">
                        <a href="javascript:void(0)" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-shield-check"></i></span>
                            <span class="text">Autentikasi</span>
                        </a>
                        <!-- Submenu start -->
                        <ul class="sidebar-submenu">
                            <li class="sidebar-submenu__item">
                                <a href="{{ route('password.request') }}" class="sidebar-submenu__link">Lupa Password</a>
                            </li>
                            <li class="sidebar-submenu__item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="sidebar-submenu__link">Keluar</button>
                                </form>
                            </li>
                        </ul>
                        <!-- Submenu End -->
                    </li>

                </ul>
            @else
                haha
            @endif
        </div>
    </div>
</aside>
