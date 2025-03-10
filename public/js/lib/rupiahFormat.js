// Format input fields
document.addEventListener('DOMContentLoaded', function() {
    const currencyInputs = document.querySelectorAll('.currency-input');

    currencyInputs.forEach(function(input) {
        // Set initial formatted value if exists
        if (input.value) {
            formatRupiah(input);
        }

        // Format on input
        input.addEventListener('input', function(e) {
            formatRupiah(this);
        });
    });

    function formatRupiah(input) {
        // Get input value and remove non-digits
        let value = input.value.replace(/[^\d]/g, '');

        // Store raw value in hidden input
        const rawInputId = input.id + '_raw';
        if (document.getElementById(rawInputId)) {
            document.getElementById(rawInputId).value = value;
        }

        // Format the number with thousand separators
        if (value) {
            value = parseInt(value, 10).toLocaleString('id-ID');
        }

        // Update the display value
        input.value = value;
    }
});
