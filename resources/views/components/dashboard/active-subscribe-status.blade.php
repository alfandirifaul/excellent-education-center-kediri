@props([
    'user',
])

<div>
    @if ($user->hasActiveSubscription())
        @php
            $subscriptionDetailsId = 'subscriptionDetails_' . $user->id;
        @endphp
        <div
            class="plan-item rounded-16 border-0 shadow-sm position-relative bg-gradient-primary-light mb-32 p-32 plan-item">
            <div class="d-flex align-items-center mb-24">
                <div
                    class="rounded-circle bg-success p-2 me-3 d-flex align-items-center justify-content-center">
                    <i class="ph ph-check-circle fs-4 text-white"></i>
                </div>
                <h3 class="mb-0 font-bold">Status Langganan Aktif</h3>

                {{-- Button detail --}}
                <div class="ms-auto">
                    <button type="button" class="btn btn-sm btn-outline-main rounded-full" onclick="toggleDetails('{{ $subscriptionDetailsId }}')">
                        <i class="ph ph-info-circle me-1"></i> Detail Langganan
                    </button>
                </div>
            </div>

            <div class="card border-0 bg-main-50 shadow-sm mb-32">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <p class="text-muted mb-1 small">Status Berlangganan</p>
                            <h5 class="mb-0 d-flex align-items-center">
                                <span class="badge bg-success me-2">
                                    <i class="ph ph-check me-1"></i>Aktif
                                </span>
                            </h5>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-1 small">Berakhir Pada</p>
                            <h5 class="mb-0 fw-bold text-danger">
                                @if ($user->getEndDateSubscription())
                                    <i class="ph ph-calendar me-2"></i>
                                    {{ $user->getEndDateSubscription()->timezone('Asia/Jakarta')->locale('id')->isoFormat('DD MMMM YYYY') }}
                                @else
                                    <i class="ph ph-warning me-2"></i>
                                    Data tidak tersedia
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Simple style-based toggle instead of Bootstrap collapse -->
            <div id="{{ $subscriptionDetailsId }}" class="mb-32" style="display: none;">
                <div class="card card-body border-0 bg-main-50">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <p class="text-muted mb-1 small">Jenis Paket</p>
                            <h6 class="mb-0">
                                @if ($user->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first())
                                    {{ $user->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first()->payment_type == 'bulanan' ? 'Paket Bulanan' : 'Paket Tahunan' }}
                                    {{ $user->siswa->kelas->nama }}
                                @else
                                    -
                                @endif
                            </h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-1 small">Tanggal Mulai</p>
                            <h5 class="mb-0 fw-bold text-muted">
                                <i class="ph ph-calendar me-2"></i>
                                @if ($user->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first())
                                    {{ Carbon\Carbon::parse(
                                        $user
                                            ->subscriptionTransactions()
                                            ->where('payment_status', true)
                                            ->latest('updated_at')->first()
                                            ->payment_start_date)
                                            ->timezone('Asia/Jakarta')
                                            ->locale('id')
                                            ->isoFormat('DD MMMM YYYY')
                                    }}
                                @else
                                    -
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="row g-3 mt-3">
                        <div class="col-md-6">
                            <p class="text-muted
                                mb-1 small">Sisa Berlangganan</p>
                            <h6 class="mb-0 fw-bold
                                @if($user->getRemainingDaySubscription() > 20) text-success
                                @elseif($user->getRemainingDaySubscription() <= 20) text-warning
                                @elseif($user->getRemainingDaySubscription() <= 10) text-danger
                                @else text-muted
                                @endif">
                                <i class="ph ph-clock me-2"></i>
                                @if ($user->hasActiveSubscription())
                                    {{ $user->getRemainingDaySubscription() }} Hari
                                @else
                                    -
                                @endif
                            </h6>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted
                                mb-1 small">Kode Referensi</p>
                            <h6 class="mb-0">
                                @if ($user->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first())
                                    {{ $user->subscriptionTransactions()->where('payment_status', true)->latest('updated_at')->first()->transaction_id}}
                                @else
                                    -
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info d-flex align-items-center" role="alert">
                <i class="ph ph-info me-2 fs-4"></i>
                <div>
                    Jika Anda ingin memperpanjang masa berlangganan, silakan pilih paket berlangganan di
                    bawah ini.
                    Perpanjangan akan dimulai setelah langganan aktif Anda berakhir.
                </div>
            </div>
        </div>

        <script>
            // Simple vanilla JS toggle function
            function toggleDetails(id) {
                const element = document.getElementById(id);
                if (element) {
                    if (element.style.display === "none") {
                        element.style.display = "block";
                    } else {
                        element.style.display = "none";
                    }
                }
            }
        </script>
    @endif
</div>
