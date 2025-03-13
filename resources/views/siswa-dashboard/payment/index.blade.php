@extends('layouts.siswa-dashboard')

@section('head-scripts')
    <!-- Include Midtrans Snap.js -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
@endsection

@section('content')
    <!-- ============================ Main Content Start ============================ -->
    <div class="dashboard-body">
        <!-- Breadcrumb Start -->
        <x-dashboard.breadcrumbs :breadcrumbs="[
            [
                'title' => 'Pembayaran',
                'url' => route('siswa-dashboard.payment'),
            ],
        ]" homeTitle="Dashboard" />
        <!-- Breadcrumb End -->

        @php
            $type = request('type');
            if ($type == 'yearly') {
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
                    Silakan selesaikan proses pembayaran Anda untuk memulai pembelajaran bersama Excellent Education
                    Center..
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal"
                                    class="underline">syarat dan ketentuan</a> yang berlaku
                            </label>
                        </div>

                        <div class="d-grid gap-3 d-md-flex">
                            <button id="pay-button" class="btn btn-primary btn-lg flex-fill" disabled>Bayar
                                Sekarang</button>
                            <a href="{{ route('siswa-dashboard.index') }}"
                                class="btn btn-outline-main flex-fill">Kembali</a>
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
                                Pembayaran akan diproses melalui sistem pembayaran yang aman. Silakan klik tombol "Bayar
                                Sekarang" untuk melanjutkan proses pembayaran.
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
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-xxl" id="termsModalLabel">Syarat dan Ketentuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5 class="font-bold text-xl">Syarat dan Ketentuan Berlangganan Excellent Education Center</h5>
                        <p>Dengan melakukan pembayaran dan berlangganan layanan Excellent Education Center, Anda menyetujui
                            syarat dan ketentuan berikut:</p>

                        <h6 class="mt-4 font-bold">1. Pembayaran dan Berlangganan</h6>
                        <ul>
                            <li>Pembayaran berlangganan {{ ucfirst($type) ?? 'Kelas' }} dilakukan di muka untuk seluruh
                                periode
                                berlangganan.</li>
                            <li>Langganan akan aktif setelah pembayaran terverifikasi oleh sistem kami.</li>
                            <li>Pembayaran yang telah dilakukan tidak dapat dikembalikan (non-refundable), kecuali
                                ditentukan
                                lain dalam kebijakan pembatalan.</li>
                            <li>Untuk langganan bulanan, perpanjangan akan dilakukan secara otomatis pada akhir periode.
                            </li>
                        </ul>

                        <h6 class="mt-3 font-bold">2. Penggunaan Layanan</h6>
                        <ul>
                            <li>Akun berlangganan hanya dapat digunakan oleh satu pengguna dan tidak dapat dibagikan.</li>
                            <li>Dilarang keras mendistribusikan, menjual, atau memberikan akses ke materi pembelajaran
                                kepada
                                pihak lain.</li>
                            <li>Semua materi pembelajaran dilindungi hak cipta dan tidak boleh direproduksi tanpa izin
                                tertulis.
                            </li>
                        </ul>

                        <h6 class="mt-3 font-bold">3. Pembatalan dan Pengembalian Dana</h6>
                        <ul>
                            <li>Pembatalan langganan harus dilakukan minimal 7 hari sebelum akhir periode berlangganan.</li>
                            <li>Pengembalian dana hanya berlaku untuk kasus tertentu dan akan diproses dalam waktu 14 hari
                                kerja.</li>
                            <li>Permintaan pengembalian dana harus disertai alasan yang jelas dan bukti yang mendukung.</li>
                        </ul>

                        <h6 class="mt-3 font-bold">4. Perubahan Layanan</h6>
                        <ul>
                            <li>Excellent Education Center berhak mengubah konten, fitur, atau kebijakan layanan tanpa
                                pemberitahuan sebelumnya.</li>
                            <li>Perubahan harga berlangganan hanya akan berlaku pada periode berikutnya.</li>
                            <li>Kami akan selalu berusaha memberitahukan perubahan penting melalui email atau notifikasi
                                dalam
                                aplikasi.</li>
                        </ul>

                        <h6 class="mt-3 font-bold">5. Privasi dan Keamanan Data</h6>
                        <ul>
                            <li>Data pribadi Anda akan disimpan dan diproses sesuai dengan Kebijakan Privasi kami.</li>
                            <li>Kami menggunakan enkripsi untuk melindungi data pembayaran dan informasi pribadi Anda.</li>
                            <li>Kami tidak akan menjual atau membagikan data pribadi Anda kepada pihak ketiga tanpa
                                persetujuan
                                Anda.</li>
                        </ul>

                        <h6 class="mt-3 font-bold">6. Penangguhan atau Penghentian Layanan</h6>
                        <ul>
                            <li>Excellent Education Center berhak menangguhkan atau menghentikan akun pengguna yang
                                melanggar
                                syarat dan ketentuan.</li>
                            <li>Penangguhan atau penghentian layanan dapat dilakukan tanpa pemberitahuan dan tanpa
                                pengembalian
                                dana.</li>
                        </ul>

                        <h6 class="mt-3 font-bold">7. Penyelesaian Sengketa</h6>
                        <ul>
                            <li>Segala sengketa yang timbul dari penggunaan layanan kami akan diselesaikan melalui
                                musyawarah.
                            </li>
                            <li>Jika tidak tercapai kesepakatan, sengketa akan diselesaikan sesuai dengan hukum yang berlaku
                                di
                                Indonesia.</li>
                        </ul>

                        <p class="mt-12 font-bold">Dengan melakukan pembayaran, Anda menyatakan telah membaca, memahami, dan
                            menyetujui seluruh syarat dan ketentuan yang tercantum di atas.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-main" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Syarat dan Ketentuan End -->
    </div>
    <!-- ============================ Main Content End ============================ -->

    <!-- ============================ Dashboard footer Start ============================ -->
    <x-dashboard.footer />
    <!-- ============================ Dashboard footer End ============================ -->

    {{-- Javascript Start --}}
    <script type="text/javascript">
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
                            sendPaymentResult(result, 'success');
                            alert("Terimakasih, Pembayaran Anda Berhasil!");
                            console.log(result);
                        },
                        onPending: function(result) {
                            alert("Menunggu Pembayaran!");
                            console.log(result);
                        },
                        onError: function(result) {
                            alert("Pembayaran Gagal, Silahkan Coba Lagi!");
                            console.log(result);
                        },
                        onClose: function() {
                            alert('Anda Belum Menyelesaikan Pembayaran!');
                        }
                    });
                });
            }
        });

        function sendPaymentResult(result, status) {
            // alert('Mengirim data pembayaran...');
            const paymentData = {
                user_id: '{{ $user->id }}',
                transaction_id: '{{ $orderId }}',
                payment_type: result.payment_type || 'unknown',
                payment_status: status,
                payment_amount: {{ $price }},
                type: '{{ $type }}'
            };

            // console.log('Sending payment data:', paymentData);

            fetch('{{ route('siswa-dashboard.payment.store') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(paymentData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    // console.log('Payment saved successfully:', data);
                    if (status === 'success') {
                        window.location.href = '{{ route('siswa-dashboard.index') }}?payment=success';
                    }
                })
                .catch(error => {
                    console.error('Error saving payment:', error);
                    if (status === 'success') {
                        // alert(
                        //     error.message +
                        //     ' Pembayaran berhasil, tetapi terjadi error saat menyimpan data. Tim kami akan memverifikasi pembayaran Anda.' +
                        //     ' ID Transaksi: ' + paymentData.transaction_id
                        // );
                        window.location.href = '{{ route('siswa-dashboard.index') }}';
                    }
                });
        }
    </script>
    {{-- Javascript End --}}
@endsection
