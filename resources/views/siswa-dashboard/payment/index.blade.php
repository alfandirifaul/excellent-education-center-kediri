@extends('layouts.siswa-dashboard')

@section('head-scripts')
    <!-- Include Midtrans Snap.js -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
@endsection

@section('content')
    <!-- ============================ Main Content Start ============================ -->
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <x-dashboard.breadcrumbs
            :breadcrumbs="[
                [
                    'title' => 'Pembayaran',
                    'url' => route('siswa-dashboard.payment')
                ]
            ]"
            homeTitle="Dashboard"
        />
        <!-- Breadcrumb End -->

        @php
                $type = request('type');
                if($type == 'yearly') {
                    $type = 'tahunan';
                } else {
                    $type = 'bulanan';
                }
        @endphp

        {{-- Content Start --}}
        <div class="card mt-24">
            {{-- header start --}}
            <div class="card-header border-bottom">
                <h4 class="mb-4 font-bold text-2xl">Pembayaran Jenjang Kelas {{ $kelas->nama }} {{ ucfirst($type) }}</h4>
                <p class="text-gray-600 text-15">
                    Silakan selesaikan proses pembayaran Anda untuk memulai pembelajaran bersama Excellent Education Center..
                </p>
            </div>
            {{-- header start --}}
            {{-- content body start --}}
            <div class="card-body p-24">
                <div class="row">
                    <div class="col-lg-6 space-y-6">
                        <div class="p-24 rounded-3 mb-4">
                            <h2 class="text-lg fw-bold border-bottom pb-12 mb-3">Detail Pembayaran</h2>
                            <div class="mb-3 row mt-12">
                                <div class="col-sm-5 text-muted">ID Transaksi</div>
                                <div class="col-sm-7 fw-medium text-start">{{ $orderId }}</div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-5 text-muted">Nama</div>
                                <div class="col-sm-7 fw-medium text-start">{{ $user->siswa->nama }}</div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-5 text-muted">Handphone</div>
                                <div class="col-sm-7 fw-medium text-start">{{ $user->phone }}</div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-5 text-muted">Email</div>
                                <div class="col-sm-7 fw-medium text-start">{{ $user->email }}</div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-5 text-muted">Jenjang Kelas</div>
                                <div class="col-sm-7 fw-medium text-start">{{ $kelas->nama }}</div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-5 text-muted">Tipe Berlangganan</div>
                                <div class="col-sm-7 fw-medium text-start">{{ ucfirst($type) }}</div>
                            </div>

                            <div class="mb-12 row mt-24">
                                <div class="col-sm-5 fw-bold">Total Pembayaran</div>
                                <div class="col-sm-7 fw-bold fs-5 text-primary text-start">{{ formatRupiah($price) }}</div>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="terms-checkbox" required>
                            <label class="form-check-label small" for="terms-checkbox">
                                Dengan melakukan pembayaran, saya menyetujui
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal" class="underline">syarat dan ketentuan</a> yang berlaku
                            </label>
                        </div>

                        <div class="d-grid gap-3 d-md-flex">
                            <button id="pay-button" class="btn btn-primary btn-lg flex-fill" disabled>Bayar Sekarang</button>
                            <a href="{{ route('siswa-dashboard.index') }}" class="btn btn-outline-main flex-fill">Kembali</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-light p-24 rounded-lg h-100">
                            <h4 class="mb-12 fw-bold text-xl">Manfaat Berlangganan</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent px-0">✓ Akses penuh semua materi</li>
                                <li class="list-group-item bg-transparent px-0">✓ Bimbingan guru berkualitas</li>
                                <li class="list-group-item bg-transparent px-0">✓ Konsultasi langsung dengan pengajar</li>
                                <li class="list-group-item bg-transparent px-0">✓ Materi dan latihan soal terlengkap</li>
                                <li class="list-group-item bg-transparent px-0">✓ Pembelajaran Fleksibel</li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- alert start --}}
                <div class="row mt-12">
                    <div class="col-lg-12">
                        <div class="alert alert-light small">
                            <p class="mb-0">
                                Pembayaran akan diproses melalui sistem pembayaran yang aman. Silakan klik tombol "Bayar Sekarang" untuk melanjutkan proses pembayaran.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- alert end --}}
            </div>
            {{-- content body end --}}
        </div>
        {{-- Content End --}}

        <!-- Modal Syarat dan Ketentuan Start -->
        <x-dashboard.syarat-ketentuan :type="$type" />
        <!-- Modal Syarat dan Ketentuan End -->
    </div>
    <!-- ============================ Main Content End ============================ -->

    <!-- ============================ Dashboard footer Start ============================ -->
    <x-dashboard.footer />
    <!-- ============================ Dashboard footer End ============================ -->

    {{-- Javascript Start--}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const payButton = document.getElementById('pay-button');
            const termsCheckbox = document.getElementById('terms-checkbox');

            // Enable/disable pay button based on checkbox
            if (termsCheckbox && payButton) {
                termsCheckbox.addEventListener('change', function() {
                    payButton.disabled = !this.checked;
                });
            }

            if (payButton) {
                payButton.addEventListener('click', function() {
                    // Show the Snap payment page
                    window.snap.pay('{{ $snapToken }}', {
                        onSuccess: function(result) {
                            console.log('Payment success:', result);
                            alert('Pembayaran berhasil!');
                            window.location.href = '{{ route("siswa-dashboard.index") }}';
                        },
                        onPending: function(result) {
                            console.log('Payment pending:', result);
                            alert('Pembayaran dalam proses. Silahkan selesaikan pembayaran Anda.');
                        },
                        onError: function(result) {
                            console.log('Payment error:', result);
                            alert('Pembayaran gagal. Silahkan coba lagi.');
                        },
                        onClose: function() {
                            console.log('Payment widget closed');
                            alert('Anda menutup halaman pembayaran tanpa menyelesaikan transaksi.');
                        }
                    });
                });
            }
        });
    </script>
    {{-- Javascript End --}}
@endsection
