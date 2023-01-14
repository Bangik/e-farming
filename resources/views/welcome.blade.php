<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ config('app.name') }} - Selamat Datang</title>
    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!--bootstrap css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css">
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('css/color-6.css') }}">
    <!--owl carousel css-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha512-lo4YgiwkxsVIJ5mex2b+VHUKlInSK2pFtkGFRzHsAL64/ZO5vaiCPmdGP3qZq1h9MzZzghrpDP336ScWugUMTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css" integrity="sha512-GQz6nApkdT7cWN1Cnj/DOAkyfzNOoq+txIhSEK1G4HTCbSHVGpsrvirptbAP60Nu7qbw0+XlAAPGUmLU2L5l4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AOS css-->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
</head>

<body data-offset="50" data-spy="scroll" data-target=".navbar" >
    <!--loader start-->
    <div class="loader-wrapper">
        <div class="loader">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--loader end-->

    <!-- Nav Start-->
    <header class="agency nav-fix custom-scroll">
        <div class="container">
            <div class="row">
                <div class="col">
                    <nav>
                        <a class="logo-light m-r-auto" href="agency_layout.html"><img alt="" class="img-fluid" src="{{asset('img/logo.png')}}"></a>
                        <div class="responsive-btn">
                            <a class="toggle-nav" href="/"><i aria-hidden="true" class="fa fa-bars text-white"></i></a>
                        </div>
                        <div class="navbar m-l-auto" id="togglebtn">
                            <div class="responsive-btn"><h5 class="btn-back">back</h5></div>
                            <ul class="main-menu">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Menu</a>
                                    <ul>
                                        <li><a href="#">Lahan</a></li>
                                        <li><a href="#">Paket Tanam</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Fitur</a>
                                    <ul>
                                        <li><a href="#">Alat dan Bahan</a></li>
                                        <li><a href="#">Jadwal Obat dan Hama</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('login')}}">Masuk</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Nav end-->

    <!--header start-->
    <section class="agency header" id="header">
        <div class="agency bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="center-text">
                            <div>
                                <div class="header-text">
                                    <h1 class="text-uppercase"><span class="bold-text">E-</span>Farming</h1>
                                </div>
                                <div class="header-sub-text">
                                    <p>Revolutionizing Agriculture through Technology. <br> Telusuri kami untuk mempelajari lebih lanjut tentang bagaimana kami dapat membantu mewujudkan ide Anda</p>
                                </div> 
                                <div class="link-horizontal">
                                    <ul>
                                        <li>
                                            <a href="{{route('login')}}" class="btn btn-default btn-gradient text-white active">Masuk</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="set-abs abs-horizon-center girl-boy">
            <img alt="" class="img-fluid" data-tilt data-tilt-max="5" data-tilt-perspective="500"
                data-tilt-speed="400" src="{{asset('img/slider-img.png')}}">
            <div class="plus-container plus-container6">
                <div class="plus white">
                </div>
            </div>
            <div class="plus-container plus-container7">
                <div class="plus white">
                </div>
            </div>
            <div class="plus-container plus-container8">
                <div class="plus white">
                </div>
            </div>
            <div class="circle-container">
                <div class="gradient-circle-big">
                </div>
            </div>
            <div class="circle-container small">
                <div class="gradient-circle-small">
                </div>
            </div>
        </div>
        <div class="plus-container">
            <div class="plus">
            </div>
        </div>
        <div class="plus-container plus-container2">
            <div class="plus plus-medium">
            </div>
        </div>
        <div class="plus-container plus-container3">
            <div class="plus plus-small">
            </div>
        </div>
        <div class="plus-container plus-container4">
            <div class="plus plus-small">
            </div>
        </div>
        <div class="plus-container plus-container5">
            <div class="plus plus-medium">
            </div>
        </div>
    </section>
    <!--header end-->

    <!--agency content start-->
    <section class="agency agency-content about-bg">
        <h3 class="text-as-shadow">About <br/> us</h3>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 offset-xl-3 col-md-9 offset-md-3">
                    <div class="agency-header-center-container">
                        <div class="borders"></div>
                        <div class="agency-head">
                            <h3 class="agency-head-text">Kami Di Sini <span class="block-span">Untuk Ide Anda</span></h3>
                        </div>
                    </div>

                    <p class="agency-para">Komitmen kami untuk membantu para petani dan pengusaha pertanian mewujudkan ide-ide inovatif mereka menjadi kenyataan. Baik itu mengembangkan varietas tanaman baru, menerapkan teknik pertanian presisi, atau meluncurkan agribisnis baru, kami memiliki keahlian dan sumber daya untuk membantu mewujudkannya.</p>
                </div>
            </div>
        </div>
        <div class="side-img  set-abs left-0 top-0" data-aos="fade-right" data-aos-duration="4500"
        >
            <div class="plus-container plus-container9">
                <div class="plus white">
                </div>
            </div>
            <div class="plus-container plus-container10">
                <div class="plus plus-medium white">
                </div>
            </div>
            <div class="plus-container plus-container11">
                <div class="plus plus plus-small white">
                </div>
            </div>
            <img alt="" class="img-fluid about-img" src="{{asset('img/about-us.png')}}">
        </div>
        <img alt="" class="img-fluid blue-img" src="{{asset('img/agency-abs-img.png')}}">
    </section>
    <!--agency content end-->

    <!--service section start-->
    <section class="agency format service-bg" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-lg-1">
                    <div class="center-text">
                        <div class="format-container">
                            <h6 class="borders-before text-uppercase">
                                <span>Layanan Kami</span>
                            </h6>
                            <div class="format-head-text">
                                <h2 class="about-font-header">Layanan yang <span class="block-span">
                                                kami sediakan</span></h2>
                            </div>
                            <div class="format-sub-text">
                                <p class="about-para">Dari penelitian dan pengembangan hingga pemasaran dan distribusi, kami berdedikasi untuk mendukung pertumbuhan dan kesuksesan industri e-farming.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-8">
                    <div class="row">
                        <div class="col-sm-6 center-content unset-height">
                            <ul class="icon-collection" data-aos="fade-left" data-aos-duration="500">
                                <li class="about-icon">
                                    <a class="center-content" href="#"><img alt=""
                                                                            src="{{asset('img/1.png')}}">
                                        <h5>Rencana Tanam</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 center-content unset-height">
                            <ul class="icon-collection" data-aos="fade-left" data-aos-duration="2000">
                                <li class="about-icon">
                                    <a class="center-content" href="#"><img alt=""
                                                                            src="{{asset('img/2.png')}}">
                                        <h5>Laporan Panen</h5>
                                    </a>
                                </li>
                                <li class="about-icon">
                                    <a class="center-content" href="#"><img alt=""
                                                                            src="{{asset('img/3.png')}}">
                                        <h5>Rencana Paket Tanam</h5>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service section end-->

    <!--footer start-->
    <footer class="agency footer2 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 set-first">
                    <div class="logo-sec">
                        <div class="footer-title mobile-title">
                            <h3 class="text-white">Tentang Kami</h3>
                        </div>
                        <div class="footer-contant">
                            <img alt="" class="img-fluid footer-logo" src="{{asset('img/logo.png')}}">
                            <div class="footer-para">
                                <h6 class="text-white para-address">E-Farming</h6>
                                <h6 class="text-white para-address">Desa Karang Duren</h6>
                                <h6 class="text-white para-address">Jember</h6>
                            </div>
                            <ul class="d-d-flex footer-social social">
                                <li class="footer-social-list">
                                    <a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                                </li>
                                <li class="footer-social-list">
                                    <a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                                </li>
                                <li class="footer-social-list">
                                    <a href="#"><i aria-hidden="true" class="fa fa-google"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="footer-title mobile-title">
                        <h3 class="text-white">Home</h3>
                    </div>
                    <div class="footer-contant">
                        <h5 class="footer-headings">Home</h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="footer-title mobile-title">
                        <h3 class="text-white">Menu</h3>
                    </div>
                    <div class="footer-contant">
                        <h5 class="footer-headings">Menu</h5>
                        <div>
                            <ul class="footer-lists op-text">
                                <li>
                                    <a href="#">Lahan</a>
                                </li>
                                <li>
                                    <a href="#">Paket Tanam</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12">
                    <div class="footer-title mobile-title">
                        <h3 class="text-white">Fitur</h3>
                    </div>
                    <div class="footer-contant">
                        <h5 class="footer-headings">Fitur</h5>
                        <div>
                            <ul class="footer-lists op-text">
                                <li>
                                    <a href="#">Alat dan Bahan</a>
                                </li>
                                <li>
                                    <a href="#">Jadwal Obat dan Hama</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->
    <!--copyright start-->
    <div class="agency copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div>
                        <h6 class="copyright-text text-white text-right">Copyright ©2019 Owner                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--copyright start-->

    <!-- Tap on Top-->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- Tap on Ends-->

    <!-- jquery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.min.js"></script>
    <!--  costamizer option -->
    <script src="{{asset('js/custamizer-option.js')}}"></script>
    <!--owl js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js" integrity="sha512-lo4YgiwkxsVIJ5mex2b+VHUKlInSK2pFtkGFRzHsAL64/ZO5vaiCPmdGP3qZq1h9MzZzghrpDP336ScWugUMTg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- AOS JS -->
    <script src="{{ asset('js/aos.js') }}"></script>
    <!-- tilt JS -->
    <script src="{{asset('js/vanilla-tilt.min.js')}}"></script>
    <!-- counter js-->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js" integrity="sha512-oy0NXKQt2trzxMo6JXDYvDcqNJRQPnL56ABDoPdC+vsIOJnU+OLuc3QP3TJAnsNKXUXVpit5xRYKTiij3ov9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--magnific popup js-->
    <script src="{{asset('js/magnific-popup.js')}}"></script>
    <!-- common js-->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/aos-init.js')}}"></script>
    {{-- <script src="../assets/js/video-popup.js"></script> --}}
    <script src="{{asset('js/script6.js')}}"></script>
    <script src="{{asset('js/layout-fix.js')}}"></script>
</body>

</html>