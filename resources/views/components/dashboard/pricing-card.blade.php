@props(['user', 'kelas', 'price', 'title', 'description'])

@if (@optional($user->siswa)->kelas_id)
    <div class="card mt-24">
        <div class="card-header border-bottom">
            <h4 class="mb-4 font-bold text-2xl">{{ $title }}</h4>
            <p class="text-gray-600 text-15">
                {{ $description }}
            </p>
        </div>
        <div class="card-body">
            <div class="row gy-4">
                {{-- Paket Bulanan --}}
                <div class="col-md-6">
                    <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                        <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-package"></i></span>
                        <h3 class="mb-4 font-bold text-xl">Paket Bulanan</h3>
                        <span class="text-gray-600">Pembayaran Setiap Bulan</span>
                        <h2 class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                            {{ formatRupiah($user->siswa->kelas->price->price_monthly) }}
                            <span class="text-md text-gray-600">/bulan</span>
                        </h2>
                        <ul>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Pembelajaran fleksibel
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Kuis interaktif
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Kurikulum terbaik
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Dukungan komunitas
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Sertifikat kelulusan
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Bank soal
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Akses ke komunitas kursus
                            </li>
                        </ul>
                        <a
                            href={{ route('siswa-dashboard.payment', [
                                    'user' => $user,
                                    'kelas' => $user->siswa->kelas,
                                    'price' => $user->siswa->kelas->price->price_monthly,
                                    'type' => 'monthly',
                                ])}}
                            class="btn btn-outline-main w-100 rounded-pill py-16 border-main-300 text-17 fw-medium mt-32">
                            Berlangganan Sekarang
                        </a>
                    </div>
                </div>

                {{-- Paket Tahunan --}}
                <div class="col-md-6">
                    <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative active">
                        <span
                            class="plan-badge py-4 px-16 bg-main-600 text-white position-absolute inset-inline-end-0 inset-block-start-0 mt-8 text-15">
                            Rekomendasi
                        </span>
                        <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-planet"></i></span>
                        <h3 class="mb-4 font-bold text-xl">Paket Tahunan</h3>
                        <span class="text-gray-600">Lebih Tenang Lebih Hemat</span>
                        <h2 class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                            {{ formatRupiah($user->siswa->kelas->price->price_yearly) }} <span
                                class="text-md text-gray-600">/tahun</span>
                        </h2>

                        <ul>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Pembelajaran fleksibel
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Kuis interaktif
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Kurikulum terbaik
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Dukungan komunitas
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Sertifikat kelulusan
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Bank soal
                            </li>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
                                Akses ke komunitas kursus
                            </li>
                        </ul>
                        <a
                            href="{{ route('siswa-dashboard.payment', [
                                'user' => $user,
                                'kelas' => $user->siswa->kelas,
                                'price' => $user->siswa->kelas->price->price_yearly,
                                'type' => 'yearly',
                            ])}}"
                            class="btn btn-main w-100 rounded-pill py-16 border-main-600 text-17 fw-medium mt-32">
                            Berlangganan Sekarang
                        </a>
                    </div>
                </div>

                <div class="col-12 mt-12">
                    <div class="bg-light p-24 border-start border-1 border-main-600 rounded-xl">
                        <h5 class="mb-12 d-flex align-items-center font-bold text-md">
                            <i class="ph ph-shield-check me-2 text-primary"></i>
                            Kepercayaan Anda Adalah Prioritas Kami
                        </h5>
                        <p class="mb-3 text-muted text-start">
                            Kami berkomitmen untuk memberikan layanan pendidikan terbaik dengan transparansi penuh.
                            Sebelum berlangganan, mohon luangkan waktu untuk membaca syarat dan ketentuan dari Excellent Education Center.
                        </p>
                        <div class="d-flex align-items-center mt-12">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="btn btn-sm btn-outline-main d-flex align-items-center">
                                <i class="ph ph-book-open me-1"></i>
                                Baca Syarat & Ketentuan
                            </a>
                        </div>
                    </div>
                    <x-dashboard.syarat-ketentuan />
                </div>
            </div>
        </div>
    </div>
@else
    <div class="card mt-24 overflow-hidden">
        <div class="card mt-12">
            <div class="card-header border-bottom flex flex-col items-center">
                <h4 class="mb-4 font-bold text-2xl">Biaya Berlangganan</h4>
                <p class="text-gray-600 text-15">
                    Pilihan paket berlangganan dari Excellent Education Center yang dapat dipilih oleh siswa
                </p>
            </div>
            <div class="card-body">
                <div class="flex justify-center mb-24 space-x-12 mt-[-20px]">
                    @foreach ($kelas as $k)
                        <button id="btn-{{ $k->id }}"
                            class="btn btn-outline-main w-90 rounded-pill py-16 border-main-600 text-17
                                   fw-medium mt-32 mx-2 transition-all duration-300"
                            onclick="filterPrices({{ $k->id }})">
                            {{ $k->nama }}
                        </button>
                    @endforeach
                </div>
                <div class="row gy-4" id="price-list">
                    @foreach ($kelas as $k)
                        <div class="col-md-6 price-item" data-kelas-id="{{ $k->id }}">
                            <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                                <img src="{{ asset($k->logo) }}" alt=""
                                    class="mb-24 rounded-full object-cover w-[20px] h-[20px] md:w-[50px] md:h-[50px] sm:w-[30px] sm:h-[30px]">
                                <h3 class="mb-4 font-bold text-xl">Paket Bulanan</h3>
                                <span class="text-gray-600">Perfect plan for students</span>
                                <h2
                                    class="h1 fw-medium text-4xl text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                    {{ formatRupiah($k->price->price_monthly) }}
                                    <span class="text-md text-gray-600">/bulan</span>
                                </h2>
                                <ul>
                                    <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                        <span class="text-24 d-flex text-main-600"><i
                                                class="ph ph-check-circle"></i></span>
                                        Pembayaran Setiap Bulan
                                    </li>
                                </ul>
                                <a href="#kelas"
                                    class="btn btn-outline-main w-100 rounded-pill py-16 border-main-300 text-17 fw-medium mt-32">
                                    Berlangganan Sekarang
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 price-item" data-kelas-id="{{ $k->id }}">
                            <div
                                class="plan-item rounded-16 border border-gray-100 transition-2 position-relative active">
                                <span
                                    class="plan-badge py-4 px-16 bg-main-600 text-white position-absolute inset-inline-end-0 inset-block-start-0 mt-8 text-15">
                                    Rekomendasi
                                </span>
                                <img src="{{ asset($k->logo) }}" alt=""
                                    class="mb-24 rounded-full object-cover w-[20px] h-[20px] md:w-[50px] md:h-[50px] sm:w-[30px] sm:h-[30px]">
                                <h3 class="mb-4 font-bold text-xl">Paket Tahunan</h3>
                                <span class="text-gray-600">For users who want to do more</span>
                                <h2
                                    class="h1 fw-medium text-4xl text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                    {{ formatRupiah($k->price->price_yearly) }} <span
                                        class="text-md text-gray-600">/tahun</span>
                                </h2>
                                <ul>
                                    <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                        <span class="text-24 d-flex text-main-600"><i
                                                class="ph ph-check-circle"></i></span>
                                        Pembayaran Setiap Tahun Gratis 2 Bulan
                                    </li>
                                </ul>
                                <a href="#kelas"
                                    class="btn btn-main w-100 rounded-pill py-16 border-main-600 text-17 fw-medium mt-32">
                                    Berlangganan Sekarang
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 mt-12">
                        <div class="bg-light p-24 border-start border-1 border-main-600 rounded-xl">
                            <h5 class="mb-12 d-flex align-items-center font-bold text-md">
                                <i class="ph ph-shield-check me-2 text-primary"></i>
                                Kepercayaan Anda Adalah Prioritas Kami
                            </h5>
                            <p class="mb-3 text-muted text-start">
                                Kami berkomitmen untuk memberikan layanan pendidikan terbaik dengan transparansi penuh.
                                Sebelum berlangganan, mohon luangkan waktu untuk membaca syarat dan ketentuan dari Excellent Education Center.
                            </p>
                            <div class="d-flex align-items-center mt-12">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="btn btn-sm btn-outline-main d-flex align-items-center">
                                    <i class="ph ph-book-open me-1"></i>
                                    Baca Syarat & Ketentuan
                                </a>
                            </div>
                        </div>
                        <x-dashboard.syarat-ketentuan />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const defaultKelasId = 1;
        filterPrices(defaultKelasId);
    });

    function filterPrices(kelasId) {
        const priceItems = document.querySelectorAll('.price-item');
        const buttons = document.querySelectorAll('[id^="btn-"]');

        priceItems.forEach(item => {
            if (item.getAttribute('data-kelas-id') == kelasId) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });

        // Remove active class from all buttons
        buttons.forEach(button => {
            button.classList.remove('btn-main');
            button.classList.add('btn-outline-main');
            button.classList.remove('active-button');
        });

        // Add active class to selected button
        const activeButton = document.getElementById(`btn-${kelasId}`);
        activeButton.classList.remove('btn-outline-main');
        activeButton.classList.add('btn-main');
        activeButton.classList.add('active-button');
    }


</script>

<style>
    .active-button {
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    [id^="btn-"] {
        margin: 0 8px;
        transition: all 0.3s ease;
    }

    [id^="btn-"]:hover {
        transform: translateY(-2px);
    }
</style>
