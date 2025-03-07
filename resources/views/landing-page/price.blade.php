<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Harga - Excellent Education Center</title>
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
                         <h1 class="page-title mb-25">Daftar Harga</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="#"></a></li>
                                <li><a href="#"></a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
      <!--plan-area start-->
      <section class="plan-area pt-150 pb-120 pt-md-100 pb-md-70 pt-xs-100 pb-xs-70">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="section-title text-center mb-55">
                        <h5 class="bottom-line mb-25">Daftar Harga</h5>
                        <h2>Jelajahi Program Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="plan-tab mb-60">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link theme_btn active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Bulanan</button>
                                <button class="nav-link theme_btn" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tahunan</button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="plan text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SD</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Dasar</h5>
                                    <img src={{ asset("img/icon/writing.svg") }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp 175.000,00 </span> <b><sup>Rp</sup>140.000,00<span class="new-price">/ Bln</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn">Gabung</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="plan plan-2 text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SMP</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Menengah Pertama</h5>
                                    <img src={{ asset('img/icon/test.svg') }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp 250.000,00 Jt</span> <b><sup>Rp</sup>230.000,00<span class="new-price">/ Bln</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn active">Gabung</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="plan plan-2a text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SMA</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Menengah Atas</h5>
                                    <img src={{ asset("img/icon/lifetime.svg") }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp 300.000,00</span> <b><sup>Rp</sup>280.000,00<span class="new-price">/ Bln</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn">Gabung</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="plan text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SD</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Dasar</h5>
                                    <img src={{ asset("img/icon/writing.svg") }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp 1,5 Jt</span> <b><sup>Rp</sup>1,2 Jt<span class="new-price">/ Thn</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="plan plan-2 text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SMP</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Menengah Pertama</h5>
                                    <img src={{ asset('img/icon/test.svg') }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp 2,3 Jt</span> <b><sup>Rp</sup>2,1 Jt<span class="new-price">/ Thn</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn active">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="plan plan-2a text-center mb-30">
                                <div class="pr__header mb-30">
                                    <h2>SMA</h2>
                                    <h5>Paket Pembelajaran Untuk Anak Sekolah Menengah Atas</h5>
                                    <img src={{ asset("img/icon/lifetime.svg") }} alt="" class="pr-icon">
                                </div>
                                <div class="pr__body">
                                    <h2 class="mb-30"><span class="old-price">Rp2,9 Jt</span> <b><sup>Rp</sup>2,7 Jt<span class="new-price">/ Thn</span> </b></h2>
                                    <ul class="price-list">
                                        <li>All Courses</li>
                                        <li>For One Person Uses Only</li>
                                        <li>25+ Article Free</li>
                                        <li>No Social Media Activity</li>
                                        <li>No Lifetime Access</li>
                                        <li>Emergency Support Only</li>
                                    </ul>
                                </div>
                                <div class="pr__footer mt-50">
                                    <a href="#" class="theme_btn price_btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </section>
      <!--plan-area end-->

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
