<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('asset/images/logo/logo.png')}}">
    <title>Artificial Quartz Stone Slab Manufacturers In Morbi, Gujarat, India | Argil</title>

    <!-- Stylesheets -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<!-- page wrapper -->

<body class="body_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->



    <!-- main header area -->
    <header class="main-header">

        <!-- header upper -->
        {{-- <div class="header-upper">
            <div class="container">
                <div class="top-left">
                    <i class="fa fa-phone">&nbsp;Call Now For Free Estimate!&nbsp;<span>(992) 551-1465</span></i>
                </div>
                <div class="top-right">
                    <ul class="social-top">
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <!-- end header upper -->


        <!-- header lower -->
        <div class="header-lower">
            <div class="container">
                <div class="logo-box">
                    <a href="/">
                        <figure><img src="{{ asset('asset/images/logo/logo.png') }}" alt=""
                                class="logo-box-image"></figure>
                    </a>
                </div>
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <!-- Home Link -->
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li>

                                <!-- Corporate Dropdown -->
                                <li
                                    class="dropdown {{ request()->is('profile*') || request()->is('about*') || request()->is('documentaryfilm*') || request()->is('corevalues*') || request()->is('groupcompany*') || request()->is('achievements*') || request()->is('plants*') || request()->is('quality*') ? 'active' : '' }}">
                                    <a href="#">Corporate</a>
                                    <ul>
                                        <li class="{{ request()->is('profile*') ? 'active' : '' }}"><a
                                                href="/profile">Profile</a></li>
                                        <li class="{{ request()->is('about*') ? 'active' : '' }}"><a
                                                href="/about">About</a></li>
                                        <li class="{{ request()->is('documentaryfilm*') ? 'active' : '' }}"><a
                                                href="/documentaryfilm">Documentary Film</a></li>
                                        <li class="{{ request()->is('corevalues*') ? 'active' : '' }}"><a
                                                href="/corevalues">Core Value</a></li>
                                        <li class="{{ request()->is('groupcompany*') ? 'active' : '' }}"><a
                                                href="/groupcompany">Group Company</a></li>
                                        <li class="{{ request()->is('achievements*') ? 'active' : '' }}"><a
                                                href="/achievements">Achievements</a></li>
                                        <li class="{{ request()->is('plants*') ? 'active' : '' }}"><a
                                                href="/plants">Plants</a></li>
                                        <li class="{{ request()->is('quality*') ? 'active' : '' }}"><a
                                                href="/quality">Quality</a></li>
                                    </ul>
                                </li>

                                <!-- Products Dropdown -->
                                <li
                                    class="dropdown {{ request()->is('quartzsurface*') || request()->is('spcproducts*') ? 'active' : '' }}">
                                    <a href="#">Products</a>
                                    <ul>
                                        <li class="{{ request()->is('quartzsurface*') ? 'active' : '' }}"><a
                                                href="/quartzsurface">Quartz Surface</a></li>
                                        <li class="{{ request()->is('spcproducts*') ? 'active' : '' }}"><a
                                                href="/spcproducts">SPC Products</a></li>
                                    </ul>
                                </li>

                                <!-- Other Links -->
                                <li class="{{ request()->is('catalogue*') ? 'active' : '' }}">
                                    <a href="/catalogue">Catalogue</a>
                                </li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}">
                                    <a href="/contact">Contact</a>
                                </li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}">
                                    <a href="/contact">Get a Price Quote</a>
                                </li>
                                <li>
                                    <a href="/contact">
                                        <i class="fa-solid fa-phone"><span
                                                style="letter-spacing:2px; font-size:13px">+91 99255 11465</span></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- end header lower -->


        <!--sticky header-->
        <div class="sticky-header">
            <div class="container">
                <div class="logo-box">
                    <a href="/">
                        <figure><img src="{{ asset('asset/images/logo/logo.png') }}" alt=""
                                style="width:80px; margin-top:-20px;" alt=""></figure>
                    </a>
                </div>
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Home</a>
                                </li>
                                <li class="dropdown"><a href="#">Corporate</a>
                                    <ul>
                                        <li><a href="/profile">Profile</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/documentaryfilm">Documentary Film</a></li>
                                        <li><a href="/corevalues">Core Value</a></li>
                                        <li><a href="/groupcompany">Group Company</a></li>
                                        <li><a href="/achievements">Achievements</a></li>
                                        <li><a href="/plants">Plants</a></li>
                                        <li><a href="/quality">Quality</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Products</a>
                                    <ul>
                                        <li><a href="/quartzsurface">Quartz Surface</a></li>
                                        <li><a href="/spcproducts">SPC Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="/catalogue">Catalogue</a>
                                </li>
                                <li><a href="/contact">Contact</a>
                                </li>
                                <li><a href="/contact">Get a Price Quote</a>
                                </li>
                                <li>
                                    <a href="/contact">  <i class="fa-solid fa-phone"><span style="letter-spacing:2px; font-size:13px">+91 99255 11465</span></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
        <!-- end sticky header -->

    </header>
    <!-- end main header area -->
    @yield('content')


    <!-- main footer area -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <div class='footer-logo'><a href="index.html">
                                    <figure><img src="{{ asset('asset/images/argileimage/footerlogo.png') }}"
                                            alt="" width="60%"></figure>
                                </a></div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="title">
                                <h5>Quick Links</h5>
                            </div>
                            <ul class="list">
                                <li><a href="#">Corporate</a></li>
                                <li><a href="#">Products</a></li>
                                <li><a href="#">Catalogue</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="subscribe-wideget footer-widget">
                            <div class="title">
                                <h5>Download Our App</h5>
                            </div>
                            <div class="downloadlink">
                                <img src="{{ asset('asset/images/argileimage/playstore.png') }}" alt=""
                                    width="65%">
                            </div>
                            <div class="downloadlink1">
                                <img src="{{ asset('asset/images/argileimage/appstore.png') }}" alt=""
                                    width="65%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <div class="title">
                                <h5>Contact Info</h5>
                            </div>
                            <div class="single-box">
                                <div class="icon-box"><i class="fa fa-phone"></i></div>
                                <p>+91 2822 240628,</p>
                                <p>+91 2822 240628</p>
                            </div>
                            <div class="single-box">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <p>info@argilties.com</p>
                            </div>
                            <div class="single-box">
                                <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                                <p>Mod Ceramic Industries Ltd.
                                    8-A, National Highway,
                                    Morbi (Gujarat),
                                    India 363 642</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom" style="flex-wrap: wrap">
            <div class="text">©2023 - Mod Ceramic Industries Ltd.</div>
            <div class="text">Powered By: Perfetto Solutions</div>
        </div>
    </footer>
    <!-- main footer area end -->



    <!--End bodywrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span>
    </div>


    <!--jquery js -->


    <script type="text/javascript" src="{{ asset('asset/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.js') }}"></script>
    <script src="{{ asset('asset/js/isotope.js') }}"></script>
    <script src="{{ asset('asset/js/validation.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('asset/js/revolution.min.js') }}"></script>

    <script src="{{ asset('asset/js/script.js') }}"></script>

    <!-- Include AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Include AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init();
    </script>
    <!-- End of .page_wrapper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
