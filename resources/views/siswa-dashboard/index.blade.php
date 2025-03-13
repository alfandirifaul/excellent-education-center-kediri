@extends('layouts.siswa-dashboard')

@section('head-scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
@endsection

@section('content')
    <!-- ============================ Dashboard Body Start ============================ -->

    <div class="dashboard-body">
        <div class="row gy-4">
            <div class="{{ $user->hasActiveSubscription() ? 'col-lg-9' : 'col-lg-12' }}">
                <!-- Grettings Box Start -->
                <div class="grettings-box position-relative rounded-16 bg-main-600 overflow-hidden gap-16 flex-wrap z-1">
                    <img src={{ asset('img/dashboard/bg/grettings-pattern.png') }} alt=""
                        class="position-absolute inset-block-start-0 inset-inline-start-0 z-n1 w-100 h-100 opacity-6">
                    <div class="row gy-4">
                        <div class="col-sm-7">
                            <div class="grettings-box__content py-xl-4 d-flex flex-column h-100 justify-content-between ml-4">
                                <div>
                                    <h1 class="text-white mt-24 mb-0 font-bold text-4xl">Halo, {{ $user->name }}! </h1>
                                </div>

                                <div class="my-auto py-3">
                                    <p class="text-lg fw-light text-white" id="motivational-quotes">
                                    </p>
                                </div>

                                <div>
                                    <h1 class="text-white mb-0 font-bold text-xl">Excellent Education Center</h1>
                                    <p class="text-sm fw-light text-white">Education is a key</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 d-sm-block d-none">
                            <div class="text-center h-100 d-flex justify-content-center align-items-end ">
                                <img src={{ $user->photo ? asset('storage/' . $user->photo) : asset('img/logo/user-placeholder.png') }}
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Grettings Box End -->

                {{-- Check different combinations of kelas and subscription status --}}
                @if ($user->siswa && $user->siswa->kelas_id != null)
                    {{-- User has kelas but no active subscription: Show pricing alert --}}
                    @if (!$user->hasActiveSubscription())
                        <x-dashboard.pricing-card :user="$user" :kelas="$kelas" :price="$price" :title="'Paket Berlangganan'"
                            :description="'Pilih paket berlangganan untuk mengakses semua fitur di Excellent Education Center'" />
                    @else
                        {{-- User has both kelas and subscription: Show normal content --}}
                        <x-dashboard.main-dashboard />
                    @endif
                @else
                    {{-- User has no kelas: Show class selection alert --}}
                    <x-dashboard.alert-class :user="$user" :kelas="$kelas" :price="$price" />
                @endif
            </div>

            @if ($user->hasActiveSubscription())
                <div class="col-lg-3">
                    <x-dashboard.calender />
                    <x-dashboard.donut-chart />
                    <x-dashboard.community />
                </div>
            @endif
        </div>
    </div>
    <!-- ============================ Dashboard Body End ============================ -->

    <!-- ============================ Dashboard footer Start ============================ -->
    <x-dashboard.footer />
    <!-- ============================ Dashboard footer End ============================ -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quotes = [
                "Jadikan pendidikan sebagai prioritas, kesungguhan sebagai sikap, dan kesuksesan sebagai tujuan. Masa depanmu ada di tanganmu sendiri.",
                "Setiap tantangan yang kamu hadapi hari ini adalah persiapan untuk masa depan yang lebih cerah. Teruslah berjuang.",
                "Keberhasilan bukan tentang seberapa cerdas kamu, tapi seberapa gigih kamu dalam menghadapi rintangan.",
                "Belajar adalah investasi terbaik untuk masa depanmu. Semakin banyak kamu belajar, semakin besar peluangmu untuk sukses.",
                "Jangan takut untuk bermimpi besar, tetapi jangan lupa untuk bekerja keras mewujudkannya.",
                "Kegagalan hanya terjadi ketika kamu berhenti mencoba. Tetaplah semangat dan pantang menyerah.",
                "Disiplin dan konsistensi hari ini akan menghasilkan prestasi dan kebanggaan di masa depan."
            ];

            let lastIndex = -1;
            const quoteElement = document.getElementById('motivational-quotes');

            // Function to update quote
            function updateQuote() {
                let randomIndex;
                // Make sure we don't show the same quote twice in a row
                do {
                    randomIndex = Math.floor(Math.random() * quotes.length);
                } while (randomIndex === lastIndex);

                lastIndex = randomIndex;

                // Fade out, change text, fade in
                quoteElement.style.opacity = '0';

                setTimeout(() => {
                    quoteElement.innerText = quotes[randomIndex];
                    quoteElement.style.opacity = '1';
                }, 500);
            }

            // Set initial quote
            updateQuote();

            // Change quote every minute
            setInterval(updateQuote, 60000);

            // Add CSS transition for smooth fade effect
            quoteElement.style.transition = 'opacity 0.5s ease';
        });
    </script>
    </div>
@endsection
