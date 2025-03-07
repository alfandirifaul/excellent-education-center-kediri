<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Zoomy - E-learning HTML5 Template</title>
    <meta name="keywords" content="online education, e-learning, coaching, education, teaching, learning">
    <meta name="description" content="Zoomy is a e-learnibg HTML template for all kinds of education, coaching, online education website">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
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
            <x-landing.navbar/>
        </div> <!-- /.theme-main-menu -->
    </header>

    <!-- slide-bar start -->
    <x-landing.sidebar/>
    <!-- slide-bar end -->


    <main>
     <!--page-title-area start-->
      <section class="page-title-area d-flex align-items-end" style="background-image: url({{ asset('img/page-title-bg/01.jpg') }});">
          <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-12">
                      <div class="page-title-wrapper mb-50">
                         <h1 class="page-title mb-25">Tentang Kami</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="#"></a></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
       <!--great-deal-area start-->
       <x-landing.great-deal/>
       <!--great-deal-area end-->
      <!--about-us-area start-->
      <section class="about-us-area pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
          <div class="container">
              <div class="row align-items-center mb-120">
                 <div class="col-lg-7">
                     <div class="about__img__box mb-20">
                        <img class="about-main-thumb pl-110" src={{ asset("img/slider/01.png") }} alt="about-img">
                        <img class="about-img about_01" src={{ asset("img/slider/02.png") }} alt="about-img">
                        <img class="about-img about_02" src={{ asset("img/slider/03.png") }} alt="about-img">
                    </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="about-wrapper">
                         <div class="section-title section-title-4 mb-60">
                            <h5 class="bottom-line mb-25">Tentang Kami</h5>
                            <h2 class="mb-20">Pengalaman belajar yang menyenangkan dengan program pembelajaran yang interaktif</h2>
                            <p class="mb-20">Excellent Education Center (EEC) adalah lembaga pendidikan yang berkomitmen untuk memberikan pengalaman belajar berkualitas melalui program pembelajaran yang interaktif dan inovatif.</p>
                            <p>Kami menghadirkan metode pembelajaran yang disesuaikan dengan kebutuhan siswa, didukung oleh para pengajar profesional dan sistem pembelajaran yang modern untuk memastikan setiap siswa dapat mencapai potensi terbaiknya.</p>
                        </div>
                     </div>
                 </div>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 mb-100">
                    <div class="slider__content slider__content__02 pt-120">
                        <h5 class="left-line mb-20 pl-40 wow fadeInUp2 animated" data-wow-delay='.1s'>Program Unggulan</h5>
                        <h1 class="main-title mb-40 wow fadeInUp2 animated" data-wow-delay='.2s'>
                            Solusi untuk Masa Depan yang Lebih Baik
                        </h1>
                        <h5 class="mb-35 wow fadeInUp2 animated" data-wow-delay='.3s'>
                            Kami menyediakan program pembelajaran yang komprehensif dengan metode pengajaran modern dan kurikulum yang terstruktur. Didukung oleh para ahli berpengalaman, kami berkomitmen untuk membantu setiap siswa mencapai prestasi akademik terbaiknya.
                        </h5>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="slider-img-box-two">
                        <div class="chose-img-wrapper mb-50 pos-rel">
                            <img class="shape-avatar-bg" src={{ asset('img/slider/avatar-bg.png') }} alt="">
                            {{-- <div class="video-wrapper">
                                <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                            </div> --}}
                            <img class="chose_05 wow fadeInRight animated" data-delay="1.5s" src={{ asset('img/slider/slide2.png') }} alt="Chose-img">
                            <img class="chose_06 wow fadeInRight animated" data-delay="1.5s" src={{ asset('img/icon/dot-plane.svg') }} alt="Chose-img">
                        </div>
                    </div>
                </div>
            </div>
              <div class="row pl-75 pr-75 pr-lg-0 pr-md-0 pr-xs-0 pl-lg-0 pl-md-0 pl-xs-0">
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="counters text-center mb-30">
                           <h2><span class="counter">100</span>+</h2>
                           <h5>Pengajar Profesional</h5>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="counters count-1 text-center mb-30">
                           <h2><span class="counter">1000</span>+</h2>
                           <h5>Materi Pembelajaran</h5>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="counters count-2 text-center mb-30">
                           <h2><span class="counter">13654</span>+</h2>
                           <h5>Soal Ujian dan Kuis</h5>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="counters count-3 text-center mb-30">
                           <h2><span class="counter">365</span>+</h2>
                           <h5>Alumni dan Siswa Terdaftar</h5>
                       </div>
                   </div>
               </div>
          </div>
      </section>
      <!--about-us-area end-->
      <!--about-section-wrapper start-->
      {{-- <div class="about-section-wrapper pos-rel gradient-bg">
          <div class="what-blur-shape-one"></div>
           <div class="what-blur-shape-two"></div>
            <!--what-loking-for start-->
            <section class="what-looking-for pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title text-center mb-55">
                                    <h5 class="bottom-line mb-25">Teachers & Students</h5>
                                    <h2>What you Looking For?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="what-box text-center mb-3">
                                    <div class="what-box__icon mb-30">
                                        <img src="assets/img/icon/phone-operator.svg" alt="">
                                    </div>
                                    <h3>Do you want to teach here?</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                                    <a href="contact.html" class="theme_btn border_btn">Register Now</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="what-box text-center mb-3">
                                    <div class="what-box__icon mb-30">
                                        <img src="assets/img/icon/graduate.svg" alt="">
                                    </div>
                                    <h3>Do you want to learn here?</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                                    <a href="contact.html" class="theme_btn border_btn active">Register Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!--what-loking-for end-->
            <!-- course-instructor start -->
            <section class="course-instructor nav-style-two f-round-bg pt-150 pb-120 pt-md-95 pt-xs-95">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-9">
                            <div class="section-title text-center text-md-start mb-60">
                                <h5 class="bottom-line mb-25">Our Instructor</h5>
                                <h2 class="mb-25">Explore Experienced Instructor</h2>
                            </div>
                        </div>
                    </div>
                    <div class="instructor-active owl-carousel">
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/01.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">John Zlathan</a></h4>
                                    <p>Software Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/02.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">Mally Yan</a></h4>
                                    <p>UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/03.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">Mesud Lamb</a></h4>
                                    <p>Programmer</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/04.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">Havana Lyon</a></h4>
                                    <p>Digital Marketing</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/01.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">John Zlathan</a></h4>
                                    <p>Software Development</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="z-instructors text-center mb-30">
                                <div class="z-instructors__thumb mb-15">
                                    <img src="assets/img/instructor/02.jpg" alt="">
                                    <div class="social-media">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="z-instructors__content">
                                    <h4 class="sub-title mb-10"><a href="instructor-profile.html">Mally Yan</a></h4>
                                    <p>UI/UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- course-instructor end -->
      </div> --}}
       <!--about-section-wrapper start-->
        <!-- subscribe-area start -->
        <x-landing.subscribe/>
        <!-- subscribe-area end -->
    </main>
    <!--footer-area start-->
    <x-landing.footer/>
    <!--footer-area end-->




    <!-- JS here -->

    <x-landing.script/>
</body>

</html>
