<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact - Excellent Education Center</title>
    <meta name="keywords" content="online education, e-learning, coaching, education, teaching, learning">
    <meta name="description" content="EEC is a e-learning website for all kinds of education, coaching, online education website">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <x-landing.style/>

</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <header>
        <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
            <x-landing.navbar />
        </div> <!-- /.theme-main-menu -->
    </header>

    <!-- slide-bar start -->
    <x-landing.sidebar/>
    <!-- slide-bar end -->


    <main>
     <!--page-title-area start-->
      <section class="page-title-area d-flex align-items-end" style="background-image: url({{ asset('img/page-title-bg/01.jpg') }}); background-size: cover;">
        <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-12">
                      <div class="page-title-wrapper mb-50">
                         <h1 class="page-title mb-25">Kontak Kami</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="#"></a></li>
                                <li><a href="#"> </a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
      <!--contact-us-area start-->
      <section class="contact-us-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6">
                      <div class="contact-img mb-30">
                         <img class="img-fluid" src={{asset('img/contact/01.jpg')}} alt="">
                      </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                      <div class="contact-wrapper pl-75 mb-30">
                          <div class="section-title mb-30">
                            <h2>Hubungi Kami</h2>
                            <p>Silakan hubungi kami untuk informasi lebih lanjut mengenai program-program kami. Kami siap membantu Anda.</p>
                          </div>
                          <div class="single-contact-box mb-30">
                              <div class="contact__iocn">
                                <img src="{{ asset('img/icon/material-location-on.svg') }}" alt="">
                            </div>
                              <div class="contact__text">
                                  <h5>Jl. Bromo No.RT. 014Tegalan, Kec. Kandat, Kab. Kediri Jawa Timur 64173</h5>
                              </div>
                          </div>
                          <div class="single-contact-box cb-2 mb-30">
                              <div class="contact__iocn">
                                <img src="{{ asset('img/icon/phone-alt.svg') }}" alt="">
                            </div>
                              <div class="contact__text">
                                <h5></h5>
                                  <h5>+62 8560-7777-846</h5>
                                  <h5></h5>
                                  {{-- <h5>+62 4321-4321-4321</h5> --}}
                              </div>
                          </div>
                          <div class="single-contact-box cb-3 mb-30">
                              <div class="contact__iocn">
                                <img src="{{ asset('img/icon/feather-mail.svg') }}" alt="">
                            </div>
                              <div class="contact__text">
                                  <h5>info@eec.com</h5>
                                  <h5>sales@eec.com</h5>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--contact-us-area end-->
      <!--contact-map-area start-->
      <section class="contact-map-area">
          <div class="container-fluid px-0">
              <div class="row gx-0">
                  <div class="col-lg-12">
                        <div class="conatct-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8399066800953!2d112.0405126!3d-7.9117869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78f9046dcb8a6f%3A0x2eb71f3374525a1c!2sEEC%20Excellent%20Education%20Center!5e0!3m2!1sid!2sid!4v1741072940801!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                  </div>
              </div>
          </div>
      </section>
      <!--contact-map-area end-->
      <!--contact-form-area start-->
      <section class="contact-form-area pt-150 pb-120 pt-md-100 pt-xs-100 pb-md-70 pb-xs-70">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-6">
                    <div class="contact-form-wrapper mb-30">
                        <h2 class="mb-45">Hubungi Kami</h2>
                        <form action="#" class="row gx-3 comments-form contact-form">
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Nama Depan">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Nama Belakang">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Nomor Telepon">
                            </div>
                            <div class="col-lg-6 col-md-6 mb-30">
                                <input type="text" placeholder="Alamat">
                            </div>
                            <div class="col-lg-12 mb-30">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12 mb-30">
                                <textarea name="commnent" id="commnent" cols="30" rows="10" placeholder="Tulis Pesan"></textarea>
                            </div>
                        </form>
                        <button class="theme_btn message_btn mt-20">Kirim Pesan</button>
                    </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="contact-img contact-img-02 mb-30">
                          <img class="img-fluid" src={{ asset('img/contact/02.jpg') }} alt="">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--contact-form-area end-->
       <!-- subscribe-area start -->
       <x-landing.subscribe/>
       <!-- subscribe-area end -->
    </main>
    <!--footer-area start-->
    <x-landing.footer/>
    <!--footer-area end-->




    <!-- JS here -->
    <x-landing.script />
</body>

</html>
