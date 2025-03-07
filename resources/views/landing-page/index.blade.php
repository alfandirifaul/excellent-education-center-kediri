<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Excellent Education Center</title>
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

    {{-- <header>
        <div id="theme-menu-one" class="main-header-area pl-100 pr-100 pt-20 pb-15">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-5">
                        <div class="logo"><a href="index.html"><img src={{ asset("img/logo/logo.png") }} alt=""></a></div>
                    </div>
                    <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                        <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                            <div class="nav-container">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Categories
                                            </a>
                                            <ul class="dropdown-menu submenu mega-menu__sub-menu-box" aria-labelledby="navbarDropdown">
                                                <li><a href="index.html"><span><img src={{ asset("img/icon/icon7.svg") }} alt=""></span> Business</a></li>
                                                <li><a href="index-2.html"><span><img src={{ asset("img/icon/icon8.svg") }} alt=""></span> Technology</a></li>
                                                <li><a href="index.html"><span><img src={{ asset("img/icon/icon9.svg") }} alt=""></span> Development</a></li>
                                                <li><a href="index-2.html"><span><img src={{ asset("img/icon/icon10.svg") }} alt=""></span> Photography</a></li>
                                                <li><a href="index.html"><span><img src={{ asset("img/icon/icon11.svg") }} alt=""></span> Digital Marketing</a></li>
                                                <li><a href="index-2.html"><span><img src={{ asset("img/icon/icon12.svg") }} alt=""></span> Programming</a></li>
                                                <li><a href="index.html"><span><img src={{ asset("img/icon/icon14.svg") }} alt=""></span> Videograpgy</a></li>
                                                <li><a href="index-2.html"><span><img src={{ asset("img/icon/icon13.svg") }} alt=""></span> Illustration</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="index.html">Home Style 1</a></li>
                                                <li><a class="dropdown-item" href="index-2.html">Home Style 2</a></li>
                                                <li><a class="dropdown-item" href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                                <li><a class="dropdown-item" href="courses.html">Course One</a></li>
                                                <li><a class="dropdown-item" href="courses-2.html">Course Two</a></li>
                                                <li><a class="dropdown-item" href="course-details.html">Courses Details</a></li>
                                                <li><a class="dropdown-item" href="price.html">Price</a></li>
                                                <li><a class="dropdown-item" href="instructor.html">Instructor</a></li>
                                                <li><a class="dropdown-item" href="instructor-profile.html">Instructor Profile</a></li>
                                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <li><a class="dropdown-item" href="blog.html">Blog Grid</a></li>
                                                <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html" id="navbarDropdown5" role="button"  aria-expanded="false">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-7">
                        <div class="right-nav d-flex align-items-center justify-content-end">
                            <div class="right-btn mr-25 mr-xs-15">
                                <ul class="d-flex align-items-center">
                                    <li><a href="contact.html" class="theme_btn free_btn">Try Free Now</a></li>
                                    <li><a class="sign-in ml-20" href="login.html"><img src={{ asset("img/icon/user.svg") }} alt=""></a></li>
                                </ul>
                            </div>
                            <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.theme-main-menu -->
    </header> --}}

    <header>
        <div id="theme-menu-one" class="main-header-area pl-100 pr-100 pt-20 pb-15">
            <x-landing.navbar/>
        </div> <!-- /.theme-main-menu -->
    </header>

    <!-- slide-bar start -->
    <x-landing.sidebar/>
    <!-- slide-bar end -->


    <main>
       <!--slider-area start-->
       <section class="slider-area pt-180 pt-xs-150 pb-xs-35">
        <img class="sl-shape shape_01" src="{{ asset('img/icon/01.svg') }}" alt="Shape Icon 1">
        {{-- <img class="sl-shape shape_02" src="{{ asset('img/icon/02.svg') }}" alt="Shape Icon 2"> --}}
        {{-- <img class="sl-shape shape_03" src="{{ asset('img/icon/03.svg') }}" alt="Shape Icon 3"> --}}
        <img class="sl-shape shape_04" src="{{ asset('img/icon/04.svg') }}" alt="Shape Icon 4">
        <img class="sl-shape shape_05" src="{{ asset('img/icon/05.svg') }}" alt="Shape Icon 5">
        <img class="sl-shape shape_06" src="{{ asset('img/icon/06.svg') }}" alt="Shape Icon 6">
        {{-- <img class="sl-shape shape_07" src="{{ asset('img/shape/dot-box-5.svg') }}" alt="Dot Box Shape"> --}}
           <div class="main-slider pt-10">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-xl-6 col-lg-6 order-last order-lg-first">
                           <div class="slider__img__box mb-50 pr-30">
                                                           <img class="img-one mt-55 pr-70" src="{{ asset('img/slider/01.png') }}" alt="Slider Image 1">
                            <img class="slide-shape img-two" src="{{ asset('img/slider/02.png') }}" alt="Slider Image 2">
                            <img class="slide-shape img-three" src="{{ asset('img/slider/03.png') }}" alt="Slider Image 3">
                            {{-- <img class="slide-shape img-four" src="{{ asset('img/shape/dot-box-1.svg') }}" alt="Dot Box 1">
                            <img class="slide-shape img-five" src="{{ asset('img/shape/dot-box-2.svg') }}" alt="Dot Box 2"> --}}
                            <img class="slide-shape img-six" src="{{ asset('img/shape/zigzg-1.svg') }}" alt="Zigzag">
                            <img class="slide-shape img-seven wow fadeInRight animated" data-delay="1.5s" src="{{ asset('img/icon/dot-plan-1.svg') }}" alt="Dot Plan">
                            <img class="slide-shape img-eight" src="{{ asset('img/slider/earth-bg.svg') }}" alt="Earth Background">
                           </div>
                       </div>
                       <div class="col-xl-6 col-lg-6">
                            <div class="slider__content pt-15">
                                <h1 class="main-title mb-40 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                    Belajar Kapanpun & Dimanapun dengan
                                    <span class="vec-shape">Tenaga Pengajar Professional.</span>
                                </h1>
                                <h5 class="mb-35 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                    Berbagai jenis materi pembelajaran tersedia di Excellent Education Center, yang telah dirancang dan
                                    disesuaikan untuk memenuhi kebutuhan pembelajaran yang lebih optimal dan efektif.                              </h5>
                                {{-- <ul class="search__area d-md-inline-flex align-items-center justify-content-between mb-30">
                                    <li>
                                        <div class="widget__search">
                                            <form class="input-form" action="#">
                                                <input type="text" placeholder="Find Courses">
                                            </form>
                                            <button class="search-icon"><i class="far fa-search"></i></button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget__select">
                                            <select name="select-cat" id="select">
                                                <option value="">Categories</option>
                                                <option value="">Class One</option>
                                                <option value="">Class Two</option>
                                                <option value="">Class Three</option>
                                                <option value="">Class Four</option>
                                                <option value="">Class Five</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <button class="theme_btn search_btn ml-35">Search Now</button>
                                    </li>
                                </ul> --}}
                                <p class="highlight-text">
                                    <span>#1</span>
                                    Sistem Pembelajaran Online Terintegrasi untuk Peningkatan Kapabilitas Profesional
                                </p>
                            </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="main-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="slider__content slider__content__03 text-center pt-120 pr-50 pl-50">
                                <h1 class="main-title mb-35 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                    Wujudkan Kesuksesan Belajar dan Raih Prestasi Terbaik Anda
                                </h1>
                                <h5 class="mb-100 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                    Temukan pengalaman belajar yang berkualitas dengan materi pembelajaran yang terstruktur dan interaktif, didukung oleh para pengajar berpengalaman untuk membantu Anda mencapai potensi terbaik.
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="slider-img-area">
                                <div class="slider-img-box-three" style="background-image: url({{ asset('img/slider/04.jpg') }});">
                                    {{-- <div class="video-wrapper">
                                        <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </section>
       <!--slider-area end-->

       <!--what-loking-for start-->
       <section class="what-looking-for pos-rel">
           <div class="what-blur-shape-one"></div>
           <div class="what-blur-shape-two"></div>
           <div class="what-look-bg gradient-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title text-center mb-55">
                                <h5 class="bottom-line mb-25">Siswa</h5>
                                <h2>Tunggu Apa Lagi?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-85">
                        {{-- <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="what-box text-center mb-35 wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <div class="what-box__icon mb-30">
                                    <img src={{ asset('img/icon/phone-operator.svg') }} alt="">
                                </div>
                                <h3>Mau Mengajar disini?</h3>
                                <p>
                                    Bergabunglah dengan tim pengajar kami dan berikan kontribusi dalam mencerdaskan bangsa melalui pendidikan berkualitas.                                </p>
                                <a href="contact.html" class="theme_btn border_btn">Gabung Sekarang</a>
                            </div>
                        </div> --}}
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="what-box text-center mb-35 wow fadeInUp2 animated" data-wow-delay='.3s'>
                                <div class="what-box__icon mb-30">
                                    <img src={{ asset('img/icon/graduate.svg') }} alt="">
                                </div>
                                <h3>Ayo Belajar Disini</h3>
                                <p>
                                    Dapatkan akses ke berbagai kursus berkualitas dan tingkatkan keterampilan Anda bersama kami. Daftar sekarang dan mulai perjalanan belajar Anda!                                </p>
                                <a href="contact.html" class="theme_btn border_btn active">Gabung Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="categoris-container">
                        <div class="col-xl-12">
                            <div class="section-title text-center mb-55">
                                <h5 class="bottom-line mb-25">Eksplor Kelas</h5>
                                <h2>Telusuri Kategori Kelas Online Kami</h2>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-5">
                            <div class="col">
                                <div class="single-category text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                    <img class="mb-30" src={{ asset("img/category-icon/atom.svg") }} alt="">
                                    <h4 class="sub-title mb-10"><a href="course-details.html">Sains</a></h4>
                                    <p>99+ Kelas Tersedia</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-category text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                    <img class="mb-30" src={{ asset("img/category-icon/web-development.svg") }} alt="">
                                    <h4 class="sub-title mb-10"><a href="course-details.html">Programming</a></h4>
                                    <p>99+ Kelas Tersedia</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-category text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.3s'>
                                    <img class="mb-30" src={{ asset("img/category-icon/atom.svg") }} alt="">
                                    <h4 class="sub-title mb-10"><a href="course-details.html">Matematika</a></h4>
                                    <p>99+ Kelas Tersedia</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-category text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.4s'>
                                    <img class="mb-30" src={{ asset("img/category-icon/career-path.svg") }} alt="">
                                    <h4 class="sub-title mb-10"><a href="course-details.html">Keterampilan</a></h4>
                                    <p>99+ Kelas Tersedia</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="single-category text-center mb-30 wow fadeInUp2 animated" data-wow-delay='.5s'>
                                    <img class="mb-30" src={{ asset("img/category-icon/graphic-tool.svg") }} alt="">
                                    <h4 class="sub-title mb-10"><a href="course-details.html">Art & Desain</a></h4>
                                    <p>99+ Kelas Tersedia</p>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 mt-20 text-center mb-20 wow fadeInUp2 animated" data-wow-delay='.6s'>
                                <a href="#" class="theme_btn">Semua Kategori</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </section>
       <!--what-loking-for end-->

        <!-- why-chose-section-wrapper start -->
        <div class="why-chose-section-wrapper gradient-bg mr-100 ml-100">
            <!-- why-chose-us start -->
            <section class="why-chose-us">
                <div class="why-chose-us-bg pt-150 pb-175 pt-md-95 pb-md-90 pt-xs-95 pb-xs-90">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-7">
                                <div class="chose-img-wrapper mb-50 pos-rel">
                                    <div class="coures-member">
                                        <h5>Total Siswa</h5>
                                        <img class="choses chose_01" src={{ asset("img/chose/01.png") }} alt="Chose-img">
                                        <img class="choses chose_02" src={{ asset("img/chose/02.png") }} alt="Chose-img">
                                        <img class="choses chose_03" src={{ asset("img/chose/03.png") }} alt="Chose-img">
                                        <img class="choses chose_04" src={{ asset("img/chose/04.png") }} alt="Chose-img">
                                        <span>1k+</span>
                                    </div>
                                    <div class="feature tag_01"><span><img src={{ asset("img/icon/shield-check.svg") }} alt=""></span> Aman & Terpercaya</div>
                                    <div class="feature tag_02"><span><img src={{ asset("img/icon/catalog.svg") }} alt=""></span> 120+ Kelas</div>
                                    <div class="feature tag_03"><span><i class="fas fa-check"></i></span> Pembelajaran Berkualitas</div>
                                    {{-- <div class="video-wrapper">
                                        <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                                    </div> --}}
                                    <div class="img-bg pos-rel">
                                        <img class="chose_05 pl-70 pl-lg-0 pl-md-0 pl-xs-0" src={{ asset("img/chose/05.png") }} alt="Chose-img">
                                    </div>
                                    <img class="chose chose_06" src={{ asset("img/shape/dot-box3.svg") }} alt="Chose-img">
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-5">
                                <div class="chose-wrapper pl-25 pl-lg-0 pl-md-0 pl-xs-0">
                                    <div class="section-title mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                                        <h5 class="bottom-line mb-25">Eksplor Excellent Education Center</h5>
                                        <h2 class="mb-25">Kenapa Harus Belajar di Excellent Education Center?</h2>
                                        <p>
                                            Excellent Education Center menyediakan solusi pendidikan terpadu dengan materi berkualitas, tenaga pengajar profesional, dan fleksibilitas
                                            pembelajaran untuk mencapai tujuan pengembangan diri Anda.                                        </p>
                                    </div>
                                    <ul class="text-list mb-40 wow fadeInUp2 animated" data-wow-delay='.2s'>
                                        <li>Materi pembelajaran yang selalu diperbarui dan relevan.</li>
                                        <li>Tenaga pengajar yang berpengalaman dan berdedikasi.</li>
                                        <li>Fleksibilitas waktu dan tempat belajar.</li>
                                    </ul>
                                    <a href="#" class="theme_btn wow fadeInUp2 animated" data-wow-delay='.3s'>Lebih Lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- why-chose-us end -->

            <!-- class example start -->
            <x-landing.class-example/>
            <!-- class example end -->

            <!-- subscribe-area start -->
                <x-landing.subscribe/>
            <!-- subscribe-area end -->

        </div>
        <!-- why-chose-section-wrapper start -->
        <!-- testimonial-area start -->
        {{-- <section class="testimonial-area testimonial-pad pt-150 pb-120 pt-md-95 pb-md-70 pt-xs-95 pb-xs-70">
            <div class="container custom-container-testimonial">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center text-md-start mb-35">
                            <h5 class="bottom-line mb-25">Our Instructor</h5>
                            <h2 class="mb-25">Explore Experienced Instructor</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <a href="instructor.html" class="theme_btn">Read All Reviews</a>
                    </div>
                </div>
                <div class="row testimonial-active-01">
                    <div class="col-xl-3">
                        <div class="item">
                        <div class="testimonial-wrapper mb-30">
                            <div class="testimonial-authors overflow-hidden mb-15">
                                <div class="testimonial-authors__avatar">
                                      <img  src={{ asset("img/testimonial/01.png") }} alt="testi-author">
                                </div>
                                <div class="testimonial-authors__content mt-10">
                                    <h4 class="sub-title">Georgia Laila</h4>
                                    <p>Full Stack Developer</p>
                                </div>
                            </div>
                            <p>" Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed di nonumy eirmod tempor invidt utlabore et dolore magn aliq erat.</p>
                            <div class="quote-icon mt-20">
                                <img src={{ asset("img/icon/quote.svg") }} alt="quote-icon">
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3">
                         <div class="item">
                            <div class="testimonial-wrapper mb-30">
                                <div class="testimonial-authors overflow-hidden mb-15">
                                    <div class="testimonial-authors__avatar">
                                        <img  src={{ asset("img/testimonial/02.png") }} alt="testi-author">
                                    </div>
                                    <div class="testimonial-authors__content mt-10">
                                        <h4 class="sub-title">Emily Gemon</h4>
                                        <p>User Interface</p>
                                    </div>
                                </div>
                                <p>" Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed di nonumy eirmod tempor invidt utlabore et dolore magn aliq erat.</p>
                                <div class="quote-icon mt-20">
                                    <img src={{ asset("img/icon/quote.svg") }} alt="quote-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="item">
                            <div class="testimonial-wrapper mb-30">
                                <div class="testimonial-authors overflow-hidden mb-15">
                                    <div class="testimonial-authors__avatar">
                                        <img  src={{ asset("img/testimonial/03.png") }} alt="testi-author">
                                    </div>
                                    <div class="testimonial-authors__content mt-10">
                                        <h4 class="sub-title">Micheal George</h4>
                                        <p>Content Writer</p>
                                    </div>
                                </div>
                                <p>" Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed di nonumy eirmod tempor invidt utlabore et dolore magn aliq erat.</p>
                                <div class="quote-icon mt-20">
                                    <img src={{ asset("img/icon/quote.svg") }} alt="quote-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                         <div class="item">
                            <div class="testimonial-wrapper mb-30">
                                <div class="testimonial-authors overflow-hidden mb-15">
                                    <div class="testimonial-authors__avatar">
                                        <img  src={{ asset("img/testimonial/01.png") }} alt="testi-author">
                                    </div>
                                    <div class="testimonial-authors__content mt-10">
                                        <h4 class="sub-title">Georgia Laila</h4>
                                        <p>Full Stack Developer</p>
                                    </div>
                                </div>
                                <p>" Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed di nonumy eirmod tempor invidt utlabore et dolore magn aliq erat.</p>
                                <div class="quote-icon mt-20">
                                    <img src={{ asset("img/icon/quote.svg") }} alt="quote-icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- testimonial-area end -->

    </main>
    <!--footer-area start-->
    <x-landing.footer/>
    <!--footer-area end-->

    <!-- JS here -->
    <x-landing.script/>
    <!-- JS here -->
</body>

</html>
