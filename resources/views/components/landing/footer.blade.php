<footer class="footer-area pt-70 pb-40">
    <div class="container">
        <div class="row mb-15">
            <div class="col-xl-3 col-lg-4 col-md-6  wow fadeInUp2 animated" data-wow-delay='.1s'>
                <div class="footer__widget mb-30">
                    <div class="footer-log mb-20">
                        <a href={{ route('home') }} class="logo">
                            <img src={{ asset("img/logo/logo.png") }} alt="">
                        </a>
                    </div>
                    <p>
                        Jl. Bromo No.RT. 014  <br> Tegalan, Kec. Kandat, Kab. Kediri <br> Jawa Timur 64173
                    </p>
                    <div class="social-media footer__social mt-30">
                        {{-- <a href="#"><i class="fab fa-facebook-f"></i></a> --}}
                        <a href="https://www.instagram.com/eec_bimbel?igsh=MWNqcWN1bnc5MnV0eQ=="><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/6285607777846"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp2 animated" data-wow-delay='.3s'>
                <div class="footer__widget mb-30 pl-40 pl-md-0 pl-xs-0">
                    <h6 class="widget-title mb-35">Kontak</h6>
                    <ul class="fot-list">
                        <li><a href="mailto:info@eec.com">info@eec.com</a></li>
                        <li><a href="tel:+6285607777846">+62 8560-7777-846</a></li>
                        <li><a href={{ url('contact') }}>Hubungi Kami</a></li>
                        <li><a href="#">Ketentuan dan Privasi</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6  wow fadeInUp2 animated" data-wow-delay='.5s'>
                <div class="footer__widget mb-25 pl-90 pl-md-0 pl-xs-0">
                    <h6 class="widget-title mb-35">Menu Cepat</h6>
                    <ul class="fot-list">
                        <li><a href={{ route('about') }}>Tentang Kami</a></li>
                        <li><a href={{ route('price') }}>Berlangganan</a></li>
                        {{-- <li><a href="#">Our Services</a></li>
                        <li><a href="#">Destinations</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6  wow fadeInUp2 animated" data-wow-delay='.7s'>
                <div class="footer__widget mb-30 pl-150 pl-lg-0 pl-md-0 pl-xs-0">
                    <h6 class="widget-title mb-35">Fitur</h6>
                    <ul class="fot-list mb-30">
                        <li><a href={{ route('home') }}>Beranda</a> </li>
                        {{-- <li><a href="#">Testimonials</a></li>
                        <li><a href="blog.html">Latest News</a></li> --}}
                        <li><a href="#">Pusat Bantuan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right-area border-bot pt-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="copyright text-center">
                        <h5>Copyright@ 2025 <a href="#">Excellent Education Center</a>. All Rights Reserved</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
