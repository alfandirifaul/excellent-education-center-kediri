<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Midtrans Payment Test</title>
    <!-- Include Snap.js from Midtrans CDN -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
</head>
<body>
    <h1>Payment Test</h1>
    {{-- <p>Order ID: {{ $orderId ?? 'Not Available' }}</p> --}}
    <button id="pay-button">Pay Now</button>

    <script>
        document.getElementById('pay-button').onclick = function() {
            // Trigger snap popup
            window.snap.pay('{{ $snapToken }}');
        };
    </script>
</body>
</html>
