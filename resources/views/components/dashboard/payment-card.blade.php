@props([
    'user',
    'kelas',
    'price',
    'type',
    'snapToken',
    'orderId'
])

@section('head-scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title
                @if ($type == 'success')
                    text-green-500
                @elseif ($type == 'error')
                    text-red-500
                @endif
            ">
                @if ($type == 'success')
                    Pembayaran Berhasil
                @elseif ($type == 'error')
                    Pembayaran Gagal
                @endif
            </h3>
        </div>
        <div class="card-body">
            <p>
                Pembayaran untuk kelas {{ $kelas->name }} sebesar {{ $price }}.
            </p>
            @if ($type == 'success')
                <p>
                    Pembayaran berhasil dilakukan. Terima kasih telah berlangganan kelas {{ $kelas->name }}.
                </p>
            @elseif ($type == 'error')
                <p>
                    Pembayaran gagal dilakukan. Silahkan coba lagi.
                </p>
            @endif
        </div>
    </div>
@endsection
