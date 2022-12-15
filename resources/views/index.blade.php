<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Judul ======-->
    <title>COWORK KOPI</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="/assets/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="/assets/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="/assets/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="/assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/www.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a href="{{route('index')}}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('menu')}}">Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('workspace')}}">Workspace</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('about')}}">Tentang Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/bbb.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s">COWORK KOPI</h3>

                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s"></h3>
                                <img src="assets/images/www.png" style="width:200px;height:200px;">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div id="particles-1" class="particles"></div> --}}
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->


    <!--====== SERVICES PART START ======-->

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- section title -->
                </div>
            </div>
        <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/menu.png" alt="shape">
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Menu</a></h4>
                            <p class="text">Temukan list minuman favorit kamu dan makanan yang bisa bikin perut kamu kenyang disini.</p>
                            <a class="more" href="{{route('menu')}}">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single services -->
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/working.png" alt="shape">
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Workspace</a></h4>
                            <p class="text">Temukan ruangan yang cocok untuk melancarkan acara ataupun kegiatan kamu disini.</p>
                            <a class="more" href="{{route('workspace')}}">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Workspace Room<span>Tempat yang nyaman untuk mengerjakan pekerjaan</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Saat ini kami menyediakan beberapa Room Workspace yang nyaman untuk pelanggan kami. anda bisa mengerjakan pekerjaan kantor, mengerjakan tugas sekolah atau kuliah, dan dapat ngobrol santai bareng teman, sahabat, pacara, ataupun keluarga.</p>
                        <a href="{{route('workspace')}}" class="main-btn">Workspace Room</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/ketik.jpeg" style="width:500px;height:500px;">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Kedai Kopi Pilihan <span> Milenial dan Kekinian</span></h3>
                        </div> <!-- section title -->
                        <p class="text">Ketika harimu sudah mulai lelah, hanya di Cowork Kopi anda dapat menenangkan pikiran dengan memesan beberapa menu spesial yang kami sajikan dengan cita rasa kopi pilihan terbaik serta menu makanan yang bisa ngenyangin perut kamu yang udah bergemetar</p>
                        <a href="{{route('menu')}}" class="main-btn">Menu</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/gelas.jpeg" style="width:500px;height:500px;">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== ABOUT PART START ======-->

    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title"><span>Tempat Nongki ternyaman</span> Hanya di Cowork Kopi Aja</h3>
                        </div> <!-- section title -->
                        <p class="text">Tidak hanya doi aja yang bikin nyaman tapi di Cowork Kopi kamu juga bisa dibikin nyaman sama tempatnya yang nyaman, fasilitas yang lengkap, apalagi banyak barista - barista yang ga kalah memikat nih dari doi kamu lohh.</p>
                        <a href="{{route('workspace')}}" class="main-btn">Datang cepetan</a>
                    </div> <!-- about content -->
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="assets/images/buku.jpeg" style="width:500px;height:500px;">
                    </div> <!-- about image -->
                </div>
            </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->



    <!--====== TEAM PART START ======-->

    <section id="team" class="team-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <div class="line m-auto"></div>
                        <h3 class="title">Tentang</h3>
                    </div> <!-- section title -->
                    <div class="col-lg-12">
                        <div class="kolom-konten text-center">
                            <div class="title-section-konten text-muted text-bold" style="font-size:30px; margin:10px 0;">
                                <p class="text">Temukan beberapa infromasi mengenai media sosial, layanan order, dan peta alamat kedai kami, serta kontak yang dapat dihubungi saat anda ingin memesan workspace room.</p>
                              </div>
                            <div class="col-lg-6 pt-4 pt-lg-0"></div>
                            <a href="{{route('about')}}" class="btn-learn-more">Untuk Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!--====== TEAM PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-60">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="kolom-konten text-center">
                    <div class="col-lg-12">
                        <div class="kolom-konten text-center">
                            <div class="title-section-konten">Hubungi Kami</div>
                            <div class="title-section-konten text-muted text-bold" style="font-size:30px; margin:10px 0;">
                                Temukan semua informasi yang anda butuhkan
                            </div>
                            <div style="margin-top:35px;">
                                <a href="https://api.whatsapp.com/send/?phone=628974227039&text&type=phone_number&app_absent=0" class="btn btn-primary"
                                    style="padding:5px 25px; border-radius:10px;">Whatsapp</a>
                            </div>
                    </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="assets/images/www.png" alt="logo">
                            </a>
                            <p class="text">Kedai kopi dengan konsep working space yang menyediakan segala fasilitas lengkap agar pelanggan tetap nyaman.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="https://www.instagram.com/cowork.kopi/?hl=id"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <!-- <h4 class="title">Quick Link</h4> -->
                                </div>
                                <!-- <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul> -->
                            </div>
                            <!-- footer wrapper -->
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="{{route('index')}}">Beranda</a></li>
                                    <li><a href="{{route('menu')}}">Menu</a></li>
                                    <li><a href="{{route('workspace')}}">Workspace</a></li>
                                    <li><a href="{{route('about')}}">Tentang Kami</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Kontak</h4>
                            </div>
                            <ul class="contact">
                                <li>+6281357525220</a></li>
                                <li>idea.multima@gmail.com</li>
                                <li>www.yourweb.com</li>
                                <li>Jl. Margobawero No.44, Mojorejo, Kec. Taman<br>Kota Madiun, Jawa Timur 63139</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Copyright ©️ 2022 Managed by <a href="https://api.whatsapp.com/send/?phone=6285648757911&text&type=phone_number&app_absent=0" rel="nofollow">K1PTI</a></p>
                            </div> <!-- copyright content -->

                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="/assets/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="/assets/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="/assets/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="/assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="/assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="/assets/js/main.js"></script>

</body>

</html>
