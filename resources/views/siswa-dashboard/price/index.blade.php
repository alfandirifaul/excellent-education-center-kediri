@extends('layouts.siswa-dashboard')

@section('content')
    <!-- ============================ Main Content Start ============================ -->
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <div class="breadcrumb mb-24">
            <ul class="flex-align gap-4">
                <li><a href="index.html" class="text-gray-200 fw-normal text-15 hover-text-main-600">Home</a></li>
                <li> <span class="text-gray-500 fw-normal d-flex"><i class="ph ph-caret-right"></i></span> </li>
                <li><span class="text-main-600 fw-normal text-15">Pricing Plan</span></li>
            </ul>
        </div>
        <!-- Breadcrumb End -->

        @if(@optional($user->siswa)->kelas_id)
            <div class="card mt-24">
                <div class="card-header border-bottom">
                    <h4 class="mb-4 font-bold text-2xl">Biaya Berlangganan</h4>
                    <p class="text-gray-600 text-15">
                    Pilihan paket berlangganan dari Excellent Education Center yang dapat dipilih oleh siswa
                    </p>
                </div>
                <div class="card-body">
                    <div class="row gy-4">
                        {{-- Paket Bulanan --}}
                        <div class="col-md-6">
                            <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                                <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-package"></i></span>
                                <h3 class="mb-4 font-bold text-xl">Paket Bulanan</h3>
                                <span class="text-gray-600">Perfect plan for students</span>
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
                                <a href="#"
                                    class="btn btn-outline-main w-100 rounded-pill py-16 border-main-300 text-17 fw-medium mt-32">
                                    Berlangganan Sekarang
                                </a>
                            </div>
                        </div>

                        {{-- Paket Tahunan --}}
                        <div class="col-md-6">
                            <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative active">
                                <span
                                    class="plan-badge py-4 px-16 bg-main-600 text-white position-absolute inset-inline-end-0 inset-block-start-0 mt-8 text-15">Rekomendasi</span>
                                <span class="text-2xl d-flex mb-16 text-main-600"><i class="ph ph-planet"></i></span>
                                <h3 class="mb-4 font-bold text-xl">Paket Tahunan</h3>
                                <span class="text-gray-600">For users who want to do more</span>
                                <h2 class="h1 fw-medium text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                                    {{ formatRupiah($user->siswa->kelas->price->price_yearly) }} <span class="text-md text-gray-600">/tahun</span>
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
                                <a href="#"
                                    class="btn btn-main w-100 rounded-pill py-16 border-main-600 text-17 fw-medium mt-32">
                                    Berlangganan Sekarang
                                </a>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label mb-8 h6 mt-32">Syarat & Ketentuan</label>
                            <ul class="list-inside">
                                <li class="text-gray-600 mb-4">1. Pembayaran dilakukan melalui transfer bank</li>
                                <li class="text-gray-600 mb-4">2. Pembayaran harus dilakukan sebelum tanggal pembayaran</li>
                                <li class="text-gray-600 mb-4">3. Pembayaran yang sudah dilakukan tidak dapat dikembalikan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <x-dashboard.pricing-card :user="$user" :kelas="$kelas" :price="$price"/>
        @endif

    </div>
    <!-- ============================ Main Content End ============================ -->

    <!-- ============================ Dashboard footer Start ============================ -->
    <x-dashboard.footer />
    <!-- ============================ Dashboard footer End ============================ -->
@endsection
