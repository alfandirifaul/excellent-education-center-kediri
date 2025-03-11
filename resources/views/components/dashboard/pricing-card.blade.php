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
                @foreach($kelas as $k)
                    <button id="btn-{{ $k->id }}"
                            class="btn btn-outline-main w-90 rounded-pill py-16 border-main-600 text-17
                                   fw-medium mt-32 mx-2 transition-all duration-300"
                            onclick="filterPrices({{ $k->id }})">
                            {{ $k->nama }}
                        </button>
                @endforeach
            </div>
            <div class="row gy-4" id="price-list">
                @foreach($kelas as $k)
                <div class="col-md-6 price-item" data-kelas-id="{{ $k->id }}">
                    <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative">
                        <img src="{{ asset($k->logo) }}" alt="" class="mb-24 rounded-full object-cover w-[20px] h-[20px] md:w-[50px] md:h-[50px] sm:w-[30px] sm:h-[30px]">
                        <h3 class="mb-4 font-bold text-xl">Paket Bulanan</h3>
                        <span class="text-gray-600">Perfect plan for students</span>
                        <h2 class="h1 fw-medium text-4xl text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                            {{ formatRupiah($k->price->price_monthly) }}
                            <span class="text-md text-gray-600">/bulan</span>
                        </h2>
                        <ul>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
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
                    <div class="plan-item rounded-16 border border-gray-100 transition-2 position-relative active">
                        <img src="{{ asset($k->logo) }}" alt="" class="mb-24 rounded-full object-cover w-[20px] h-[20px] md:w-[50px] md:h-[50px] sm:w-[30px] sm:h-[30px]">
                        <h3 class="mb-4 font-bold text-xl">Paket Tahunan</h3>
                        <span class="text-gray-600">For users who want to do more</span>
                        <h2 class="h1 fw-medium text-4xl text-main mb-32 mt-16 pb-32 border-bottom border-gray-100 d-flex gap-4">
                            {{ formatRupiah($k->price->price_yearly) }} <span class="text-md text-gray-600">/tahun</span>
                        </h2>
                        <ul>
                            <li class="flex-align gap-8 text-gray-600 mb-lg-4 mb-20">
                                <span class="text-24 d-flex text-main-600"><i class="ph ph-check-circle"></i></span>
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

                <div class="col-12">
                    <label class="form-label mb-8 h6 mt-32">Syarat & Ketentuan</label>
                    <ul class="list-inside">
                        <li class="text-gray-600 mb-4">1. Pembayaran dilakukan melalui transfer bank</li>
                        <li class="text-gray-600 mb-4">2. Sebelum pembayaran berhasil semua fitur tidak dapat di akses</li>
                        <li class="text-gray-600 mb-4">3. Pembayaran yang sudah dilakukan tidak dapat dikembalikan</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

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
