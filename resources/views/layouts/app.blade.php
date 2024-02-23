<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>ỚT ĐỎ | Thực Phẩm Xuân Phong</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{ asset('app/dist/font-awesome.css?v=1.1') }}">

    <link rel="stylesheet" href="{{ asset('app/dist/app.css?v=1.1') }}">
    <link rel="stylesheet" href="{{ asset('app/dist/responsive.css?v=1.1') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/Favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/images/logo/Favicon.png') }}">
    <style>
        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }
        img[alt="www.000webhost.com"]{display:none;}
    </style>
    <style>
        .menu-item a{
            color: #ff9c00 !important;
        }
        .menu-item:hover a {
            color:#c80000 !important ;
        }
        .current-menu-item a {
            color:#c80000 !important ;
        }
        .mobile-button::before, .mobile-button::after, .mobile-button span{
            background: #c80000 !important;
        }

        #menu-primary-menu {
            background: black;
            margin-top: 0.5px !important;
        }
        @media (max-width: 576px) {
        }
    </style>
</head>

<body class="body header-fixed">
    <!-- preloade -->
    <div class="preload preload-container">
        <div id="loaders">
            <div id="shadow"></div>
            <div id="box"></div>
        </div>
    </div>

    <!-- /preload -->
    <div id="wrapper">
        <div id="page" class="clearfix">
            <header id="header_main" class="header_1 js-header" style="background:black;">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="site-header-inner">
                                <div class="wrap-box relative">
                                    <div id="site-logo" class="clearfix">
                                        <div id="site-logo-inner">
                                            <a href="/" rel="home" class="main-logo">
                                                <img id="logo_header"
                                                    src="{{ asset('assets/images/logo/logo@2x.png') }}" alt="img"
                                                    width="100" height="65">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mobile-button"><span></span></div>
                                    <nav id="main-nav" class="main-nav">
                                        <ul id="menu-primary-menu" class="menu">
                                            <li class="menu-item current-menu-item">
                                                <a href="/">Trang Chủ</a>
                                            </li>
                                            <li class="menu-item" id='gioi-thieu'>
                                                <a href="/gioi-thieu">Giới Thiệu </a>
                                            </li>

                                            <li class="menu-item" id='san-pham'>
                                                <a href="/san-pham">Sản Phẩm </a>
                                            </li>

                                            {{-- <li class="menu-item">
                                                <a href="/nha-may">Nhà Máy </a>
                                            </li> --}}

                                            <li class="menu-item" id='tin-tuc'>
                                                <a href="/tin-tuc">Tin Tức</a>
                                            </li>

                                            <li class="menu-item" id='lien-he'>
                                                <a href="/lien-he">Liên Hệ </a>
                                            </li>

                                            <li class="menu-item" id='chinh-sach'>
                                                <a href="/chinh-sach">Chính Sách </a>
                                            </li>
                                        </ul>
                                    </nav><!-- /#main-nav -->
                                    <div class="flat-button-top flex">
                                        <div class="sc-btn-top" id="site-header">
                                            <div class="buttons">
                                                <a class="blob-btn btn-style" href="/lien-he">
                                                    Liên Hệ Đặt Hàng
                                                    <span class="blob-btn__inner">
                                                        <span class="blob-btn__blobs">
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                            <span class="blob-btn__blob"></span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')
    <!-- flat brand -->
    <section class="flat-brand page">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="brand-slider">
                        <div class="swiper-container carousel-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/brand-1.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo active">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/brand-2.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/brand-3.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/brand-4.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slogan-logo">
                                        <a href="#">
                                            <img src="{{asset('assets/images/icon/brand-5.jpg')}}" alt="images">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- Footer -->
            <footer id="footer" class="clearfix page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-12 col-12" style="padding-right: 30px">
                            <div class="widget widget-logo">
                                <div class="flat-box">
                                    <div class="logo-footer style" id="logo-footer">
                                        <a href="/">
                                            <img id="logo_footer"
                                                src="{{ asset('assets/images/logo/logo-footer@2x.png') }}" alt="img"
                                                width="80%" height="42">
                                        </a>
                                    </div>
                                    <p class="sub-widget-logo lh-28" style="font-family: 'Pacifico', cursive; font-size:27px; line-height:1.7; padding:0">"chân gà tê cay - đắm say thưởng thức"</p>
                                    <h6 class=""> Sản Phẩm Của: <span class="fw-4">CÔNG TY TNHH THỰC PHẨM XUÂN PHONG</span> </h6>
                                    <h6 class="">Địa Chỉ: <span class="fw-4">SN095-097, đường Thanh Niên, phường Cốc
                                            Lếu, TP Lào Cai, tỉnh Lào Cai </span> </h6>
                                    <h6 class="">Địa Chỉ Sản Xuất: <span class="fw-4">Thôn Phú Hạ, xã Minh Phú, huyện
                                            Sóc Sơn, TP Hà Nội </span> </h6>
                                    <h6 class="link-style-4">Điện Thoại: <a href="tel:0862037730"
                                            class="fw-4">0862.037.730</a> </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-12">
                            <div class="widget widget-menu style-12 ">
                                <div class="title-widget fw-6">Liên Kết Nhanh</div>
                                <ul class="box-menu link-style-4">
                                    <li><a href="/">Trang chủ</a></li>
                                    <li><a href="/gioi-thieu">Giới Thiệu</a></li>
                                    <li><a href="/san-pham">Sản Phẩm</a></li>
                                    <li><a href="/tin-tuc">Tin Tức</a></li>
                                    <li><a href="/lien-he">Liên Hệ</a></li>
                                    <li><a href="/chinh-sach">Chính Sách</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="widget widget-menu style-4">
                                <div class="title-widget fw-6">Bản Đồ</div>
                                <div class="recent-news">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.035572801444!2d103.9627982114721!3d22.502848479456127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd139ee1d66a53%3A0xb145e7f13170ab20!2zOTcgVGhhbmggTmnDqm4sIER1ecOqbiBI4bqjaSwgTMOgbyBDYWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1704899183404!5m2!1svi!2s"
                                    width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="scroll-top" class="go-top">
                    <h5 class="text-color-3"><a class=""></a> Lên Trên Cùng</h5>
                </div>
            </footer><!-- /#footer -->

            <div class="widget-social-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h5 class="title-bottom fw-4"> Copyright © 2024 <a href="/" class="text-color-3">CÔNG TY
                                    TNHH THỰC PHẨM XUÂN PHONG</a> </h5>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="icon-bottom text-color-1">
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=61555131531304"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom -->
        </div>
        <!-- /#page -->

    </div>
    <!-- /#wrapper -->

    <div class="img-svg">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                    <feColorMatrix in="blur" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo">
                    </feColorMatrix>
                    <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                </filter>
            </defs>
        </svg>
    </div>

    <!-- <a id="scroll-top" class="button-go"></a> -->

    <!-- Javascript -->

    <script src="{{ asset('app/js/jquery.min.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/jquery.easing.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/countto.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/bootstrap.min.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/swiper-bundle.min.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/swiper.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/jquery.fancybox.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/jquery-validate.js?v=1.1') }}"></script>

    <script src="{{ asset('app/js/plugin.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/shortcodes.js?v=1.1') }}"></script>
    <script src="{{ asset('app/js/main.js?v=1.1') }}"></script>

    <script>
        $(document).ready(function () {
            var currentUrl = window.location.href;
            var lastSlashIndex = currentUrl.lastIndexOf('/');
            var path = currentUrl.substring(lastSlashIndex + 1);
            if (path) {
                $('.menu-item').removeClass('current-menu-item');
                $('#' + path).addClass('current-menu-item');
            }
        })        
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
    @include('iconChat.help')    

</body>

</html>