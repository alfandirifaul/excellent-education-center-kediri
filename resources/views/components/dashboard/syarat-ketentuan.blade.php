@props([
    'type' => null,
])

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
                    <li>Pembayaran berlangganan {{ ucfirst($type) ?? 'Kelas' }} dilakukan di muka untuk seluruh periode
                        berlangganan.</li>
                    <li>Langganan akan aktif setelah pembayaran terverifikasi oleh sistem kami.</li>
                    <li>Pembayaran yang telah dilakukan tidak dapat dikembalikan (non-refundable), kecuali ditentukan
                        lain dalam kebijakan pembatalan.</li>
                    <li>Untuk langganan bulanan, perpanjangan akan dilakukan secara otomatis pada akhir periode.</li>
                </ul>

                <h6 class="mt-3 font-bold">2. Penggunaan Layanan</h6>
                <ul>
                    <li>Akun berlangganan hanya dapat digunakan oleh satu pengguna dan tidak dapat dibagikan.</li>
                    <li>Dilarang keras mendistribusikan, menjual, atau memberikan akses ke materi pembelajaran kepada
                        pihak lain.</li>
                    <li>Semua materi pembelajaran dilindungi hak cipta dan tidak boleh direproduksi tanpa izin tertulis.
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
                    <li>Kami akan selalu berusaha memberitahukan perubahan penting melalui email atau notifikasi dalam
                        aplikasi.</li>
                </ul>

                <h6 class="mt-3 font-bold">5. Privasi dan Keamanan Data</h6>
                <ul>
                    <li>Data pribadi Anda akan disimpan dan diproses sesuai dengan Kebijakan Privasi kami.</li>
                    <li>Kami menggunakan enkripsi untuk melindungi data pembayaran dan informasi pribadi Anda.</li>
                    <li>Kami tidak akan menjual atau membagikan data pribadi Anda kepada pihak ketiga tanpa persetujuan
                        Anda.</li>
                </ul>

                <h6 class="mt-3 font-bold">6. Penangguhan atau Penghentian Layanan</h6>
                <ul>
                    <li>Excellent Education Center berhak menangguhkan atau menghentikan akun pengguna yang melanggar
                        syarat dan ketentuan.</li>
                    <li>Penangguhan atau penghentian layanan dapat dilakukan tanpa pemberitahuan dan tanpa pengembalian
                        dana.</li>
                </ul>

                <h6 class="mt-3 font-bold">7. Penyelesaian Sengketa</h6>
                <ul>
                    <li>Segala sengketa yang timbul dari penggunaan layanan kami akan diselesaikan melalui musyawarah.
                    </li>
                    <li>Jika tidak tercapai kesepakatan, sengketa akan diselesaikan sesuai dengan hukum yang berlaku di
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

<script>
    const termsCheckbox = document.getElementById('terms-checkbox');

    // Enable/disable pay button based on checkbox
    if (termsCheckbox && payButton) {
        termsCheckbox.addEventListener('change', function() {
            payButton.disabled = !this.checked;
        });
    }
</script>
