{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{asset('asset/images/logo/logo.png')}}">

    @yield("seosection")

    <!-- Stylesheets -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('asset/css/app1.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}


{{-- </head>

<!-- page wrapper -->

<body class="body_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->



    <!-- main header area -->
    <header class="main-header"> --}}

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


        {{-- <!-- header lower -->
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
                        </div> --}}
                        {{-- <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">

                                <!-- Home Link -->
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li> --}}

                                <!-- Corporate Dropdown -->
                                {{-- <li --}}
                                    {{-- class="dropdown {{ request()->is('profile*') || request()->is('about*') || request()->is('documentaryfilm*') || request()->is('corevalues*') || request()->is('groupcompany*') || request()->is('achievements*') || request()->is('plants*') || request()->is('quality*') ? 'active' : '' }}">
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
                                </li> --}}

                                <!-- Products Dropdown -->
                                {{-- <li
                                    class="dropdown {{ request()->is('quartzsurface*') || request()->is('spcproducts*') ? 'active' : '' }}">
                                    <a href="#">Products</a>
                                    <ul>
                                        <li class="{{ request()->is('quartzsurface*') ? 'active' : '' }}"><a
                                                href="/quartzsurface">Quartz Surface</a></li>
                                        <li class="{{ request()->is('spcproducts*') ? 'active' : '' }}"><a
                                                href="/spcproducts">SPC Products</a></li>
                                    </ul>
                                </li> --}}

                                <!-- Other Links -->
                                {{-- <li class="{{ request()->is('catalogue*') ? 'active' : '' }}">
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
        </div> --}}
        <!-- end header lower -->


        <!--sticky header-->
        {{-- <div class="sticky-header">
            <div class="container">
                <div class="logo-box">
                    <a href="/">
                        {{-- <figure><img src="{{ asset('asset/images/logo/logo.png') }}" alt=""
                                class="logo-box-image"></figure> --}}
                    {{-- </a>
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
                            <ul class="navigation clearfix"> --}}

                                <!-- Home Link -->
                                {{-- <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li> --}}

                                <!-- Corporate Dropdown -->
                                {{-- <li
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
                                </li> --}}

                                <!-- Products Dropdown -->
                                {{-- <li
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
            </div> --}}
        {{-- </div> --}}
        <!-- end sticky header -->

    {{-- </header> --}}
    <!-- end main header area -->
    {{-- @yield('content')


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
        <div class="footer-bottom container">
            <p class="text col-md-9">©2023 - Mod Ceramic Industries Ltd.</p>
            <p class="text col-md-3">Powered By: Perfetto Solutions</p>
        </div>
    </footer> --}}
    <!-- main footer area end -->



    <!--End bodywrapper-->


    <!--Scroll to top-->
    {{-- <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span>
    </div> --}}


    <!--jquery js -->


    {{-- <script type="text/javascript" src="{{ asset('asset/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('asset/js/wow.js') }}"></script>
    <script src="{{ asset('asset/js/isotope.js') }}"></script>
    <script src="{{ asset('asset/js/validation.js') }}"></script>
    <script src="{{ asset('asset/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('asset/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('asset/js/SmoothScroll.js') }}"></script>
    <script src="{{ asset('asset/js/revolution.min.js') }}"></script>

    <script src="{{ asset('asset/js/script.js') }}"></script> --}}

    {{-- <!-- Include AOS CSS -->
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
    </script> --}}
{{-- </body>

</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Palatka | Responsive HTML 5 Template</title>

<!-- Stylesheets -->
<link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
<link rel="icon" href="{{ asset('asset/images/favicon.ico') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('asset/css/app1.css') }}">

</head>

<!-- page wrapper -->
<body class="body_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->



    <!-- main header area -->
    <header class="main-header">

        <!-- header upper -->
        <div class="header-upper">
            <div class="container">
                <div class="top-left">
                    <i class="fa fa-phone">&nbsp;Call Now For Free Estimate!&nbsp;<span>(320) 987-6543</span></i>
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
        </div>
        <!-- end header upper -->

        <!-- header lower -->
        <div class="header-lower">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><figure><img src="{{ ('images/home/logo.png') }}" alt=""></figure></a>
                </div>
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                    {{-- <div class="info-box">
                        <div class="search-box-area">
                            <div class="search-toggle"><i class="fa fa-search"></i></div>
                            <div class="search-box">
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        {{-- <div class="cart-box">
                            <div class="icon-box"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></div>
                            <div class="number">3</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end header lower -->

        <!--sticky header-->
        <div class="sticky-header">
            <div class="container">
                <div class="logo-box">
                    <a href="index.html"><figure><img src="images/home/logo.png" alt=""></figure></a>
                </div>
                <div class="menu-bar">
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
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
                    {{-- <div class="info-box">
                        <div class="search-box-area">
                            <div class="search-toggle"><i class="fa fa-search"></i></div>
                            <div class="search-box">
                                <form method="post" action="index.html">
                                    <div class="form-group">
                                        <input type="search" name="search" placeholder="Search Here" required>
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="cart-box">
                            <div class="icon-box"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></div>
                            <div class="number">3</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- end sticky header -->

    </header>
    <!-- end main header area -->

    @yield('content')

    <!--Main Slider-->
    {{-- <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/slider/1.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-80"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <h1>Creativity On Your Floor Designs</h1>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="text">We are committed to quality services and value our customers <br />
                    Make installation of new floors easy and durable</div>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="tp-btn">
                        <a href="#" class="btn-one">view our projects</a>
                        <a href="#" class="btn-two">learn  more</a>
                    </div>
                    </div>

                    </li>

                    <li data-transition="zoomin" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/slider/2.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-80"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <h1>Creativity On Your Floor Designs</h1>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="text">We are committed to quality services and value our customers <br />
                    Make installation of new floors easy and durable</div>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="tp-btn">
                        <a href="#" class="btn-one">view our projects</a>
                        <a href="#" class="btn-two">learn  more</a>
                    </div>
                    </div>

                    </li>

                    <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1000" data-thumb="images/slider/3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="images/slider/3.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-80"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <h1>Creativity On Your Floor Designs</h1>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="10"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="text">We are committed to quality services and value our customers <br />
                    Make installation of new floors easy and durable</div>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn">
                    <div class="tp-btn">
                        <a href="#" class="btn-one">view our projects</a>
                        <a href="#" class="btn-two">learn  more</a>
                    </div>
                    </div>

                    </li>

                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section> --}}
    <!-- main slider end -->


    <!-- top-info -->
    {{-- <section class="top-info centred">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-user"></i></div>
                        <h4>Experienced & Responsive</h4>
                        <div class="text">
                            <p>Dolor sit amet consectetur dui elit sed
                            eiusmod tempor incididunt aliqua utas enim
                            minim veniam tempore quis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-open-book"></i></div>
                        <h4>Offers Free Estimate</h4>
                        <div class="text">
                            <p>Dolor sit amet consectetur dui elit sed
                            eiusmod tempor incididunt aliqua utas enim
                            minim veniam tempore quis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-favorites-button"></i></div>
                        <h4>Creative Floor Designs</h4>
                        <div class="text">
                            <p>Dolor sit amet consectetur dui elit sed
                            eiusmod tempor incididunt aliqua utas enim
                            minim veniam tempore quis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top info end -->


    <!-- service section -->
    <section class="service-section sec-pad centred">
        <div class="container">
            <div class="service-title">
                <div class="sec-title"><h2>Browse Our Services</h2></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/1.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">Carpet Flooring</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/2.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">HardWood</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/3.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">Laminate</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/4.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">vinyle sheets</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/5.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">paving work</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 service-column">
                    <div class="single-item">
                        <div class="img-box">
                            <a href="service-details.html"><figure><img src="images/service/6.jpg" alt=""></figure></a>
                        </div>
                        <div class="lower-content">
                            <h4><a href="service-details.html">marble tiles</a></h4>
                            <div class="text"><p>Dolor sit amet consectetur elit</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="service.html" class="btn-three">more services</a>
            </div>
        </div>
    </section>
    <!-- service section end -->


    <!-- call-to-action -->
    <section class="call-to-action">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 column">
                    <div class="left-content"><div class="text">Need any of our Service? <span>Call Us Now Or Send A Message</span></div></div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 column">
                    <div class="right-content">
                        <div class="text">For Free Estimate, Dial <span>(320) 987-6543</span>  Or</div>
                        <div class="button"><a href="#" class="btn-three">send message</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action -->


    <!--Project Section-->
    <section class="project-section sec-pad project-tab">
        <div class="project-top">
            <div class="container">
                <div class="sec-title"><h2>Recent Projects</h2></div>
                <ul class="product-tab-btns project-btn post-filter">
                    <li class="p-tab-btn active-btn" data-tab="#p-tab-1">All projects</li>
                    <li class="p-tab-btn" data-tab="#p-tab-2">residential</li>
                    <li class="p-tab-btn" data-tab="#p-tab-3">commercial</li>
                    <li class="p-tab-btn" data-tab="#p-tab-4">paving</li>
                    <li class="p-tab-btn" data-tab="#p-tab-5">vinyle sheet</li>
                </ul>
            </div>
        </div>

        <!--Tabs Content-->
        <div class="container-fluid centred">
            <div class="p-tabs-content">
                <div class="p-tab active-tab" id="p-tab-1">
                    <div class="project-slider owl-dots-none">
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/1.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">new office floor</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/2.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">paving work</a></h5>
                                <div class="text">Paving</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/3.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">vinyle sheets</a></h5>
                                <div class="text">Wooden Floor</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/4.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/4.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">Bath marble</a></h5>
                                <div class="text">Residential</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/5.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">bamboo flooring</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-2">
                    <div class="project-slider owl-dots-none">
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/1.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">new office floor</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/2.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">paving work</a></h5>
                                <div class="text">Paving</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/3.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">vinyle sheets</a></h5>
                                <div class="text">Wooden Floor</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/4.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/4.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">Bath marble</a></h5>
                                <div class="text">Residential</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/5.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">bamboo flooring</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-3">
                    <div class="project-slider owl-dots-none">
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/1.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">new office floor</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/2.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">paving work</a></h5>
                                <div class="text">Paving</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/3.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">vinyle sheets</a></h5>
                                <div class="text">Wooden Floor</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/4.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/4.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">Bath marble</a></h5>
                                <div class="text">Residential</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/5.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">bamboo flooring</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-4">
                    <div class="project-slider owl-dots-none">
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/1.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">new office floor</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/2.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">paving work</a></h5>
                                <div class="text">Paving</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/3.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">vinyle sheets</a></h5>
                                <div class="text">Wooden Floor</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/4.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/4.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">Bath marble</a></h5>
                                <div class="text">Residential</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/5.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">bamboo flooring</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Portfolio Tab-->
                <div class="p-tab" id="p-tab-5">
                    <div class="project-slider owl-dots-none">
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/1.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/1.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">new office floor</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/2.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/2.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">paving work</a></h5>
                                <div class="text">Paving</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/3.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/3.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">vinyle sheets</a></h5>
                                <div class="text">Wooden Floor</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/4.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/4.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">Bath marble</a></h5>
                                <div class="text">Residential</div>
                            </div>
                        </div>
                        <div class="single-item filter-item">
                            <div class="single-item-overlay">
                                <div class="img-box">
                                    <a href="#"><img src="images/gallery/5.jpg" alt=""></a>
                                    <div class="overlay">
                                        <div class="inner-box">
                                            <ul class="content">
                                                <li><a href="images/gallery/5.jpg" class="lightbox-image"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lower-content">
                                <h5><a href="projects.html">bamboo flooring</a></h5>
                                <div class="text">Commercial</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Project Section-->


    <!-- testimonials section -->
    <section class="testimonials-section sec-pad centred">
        <div class="container">
            <div class="sec-title"><h2>Clients Feedback</h2></div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 column">
                    <div class="testimonials-slider">
                        <div class="testimonials-content">
                            <div class="text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis
                                nostrud exercitation ullamco laboris nisi ut alisuid.</h3>
                            </div>
                            <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                            <div class="author-info">
                                <h6>John Alison</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis
                                nostrud exercitation ullamco laboris nisi ut alisuid.</h3>
                            </div>
                            <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                            <div class="author-info">
                                <h6>John Alison</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis
                                nostrud exercitation ullamco laboris nisi ut alisuid.</h3>
                            </div>
                            <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                            <div class="author-info">
                                <h6>John Alison</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis
                                nostrud exercitation ullamco laboris nisi ut alisuid.</h3>
                            </div>
                            <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                            <div class="author-info">
                                <h6>John Alison</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="text">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis
                                nostrud exercitation ullamco laboris nisi ut alisuid.</h3>
                            </div>
                            <div class="img-box"><figure><img src="images/home/t1.png" alt=""></figure></div>
                            <div class="author-info">
                                <h6>John Alison</h6>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section end -->


    <!-- choose us section -->
    <section class="choose-us">
        <div class="container">
            <div class="choose-us-area">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 choose-us-column">
                        <div class="choose-us-content">
                            <div class="sec-title"><h2>Why Choose Us</h2></div>
                            <ul class="list">
                                <li>From Start to Finish Under Experienced Supervision</li>
                                <li>Hard Surface Floor Protection</li>
                                <li>Washing of Floors before and After Work</li>
                                <li>Creative and Latest Sample Designs for Our Customers</li>
                                <li>FREE Quotes & Estimates on Demand</li>
                                <li>Organize Flooring and paving FREE Seminars</li>
                            </ul>
                            <div class="lower-content centred">
                                <h6>And many more reasons, So what are you waiting for</h6>
                                <div class="text">Call Us Today &nbsp;<span>(320) 987-6543</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 choose-us-column">
                        <div class="choose-us-form">
                            <div class="title centred">
                                <div class="text">Need any of our Service? <span>Get FREE Estimate</span></div>
                            </div>
                            <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_name" value="" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="form_email" value="" placeholder="Email *" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_phone" value="" placeholder="Telephone *" required="">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="form_subject" value="" placeholder='Service Required *' required="">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea placeholder="Message *" name="form_message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="button centred">
                                    <button type="submit" class="btn-one" data-loading-text="Please wait...">get estimate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose us section end -->


    <!-- latest-products section -->
    <section class="latest-products sec-pad centred">
        <div class="container">
            <div class="sec-title"><h2>Latest Products Shop</h2></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 shop-column">
                    <div class="overlay-style-two">
                        <div class="item">
                            <figure class="img-box">
                                <img src="images/shop/1.jpg" alt="">
                                <div class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer">
                                            <a href="service-1.html" class="btn-one">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content center">
                                <h4><a href="#">Floor Pattern #1</a></h4>
                                <div class="text"><span>$50</span> / Sq In</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 shop-column">
                    <div class="overlay-style-two">
                        <div class="item">
                            <figure class="img-box">
                                <img src="images/shop/2.jpg" alt="">
                                <div class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer">
                                            <a href="service-1.html" class="btn-one">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content center">
                                <h4><a href="#">Floor Pattern #1</a></h4>
                                <div class="text"><span>$50</span> / Sq In</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 shop-column">
                    <div class="overlay-style-two">
                        <div class="item">
                            <figure class="img-box">
                                <img src="images/shop/3.jpg" alt="">
                                <div class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer">
                                            <a href="service-1.html" class="btn-one">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content center">
                                <h4><a href="#">Floor Pattern #1</a></h4>
                                <div class="text"><span>$50</span> / Sq In</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 shop-column">
                    <div class="overlay-style-two">
                        <div class="item">
                            <figure class="img-box">
                                <img src="images/shop/4.jpg" alt="">
                                <div class="default-overlay-outer">
                                    <div class="inner">
                                        <div class="content-layer">
                                            <a href="service-1.html" class="btn-one">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <div class="lower-content center">
                                <h4><a href="#">Floor Pattern #1</a></h4>
                                <div class="text"><span>$50</span> / Sq In</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <a href="#" class="btn-three">shop more items</a>
            </div>
        </div>
    </section>
    <!-- latest-products section end -->


    <!-- pricing-section -->
    <section class="pricing-section sec-pad centred">
        <div class="container">
            <div class="sec-title"><h2>Pricing Structure</h2></div>
            <div class="pricing-area">
                <div class="pricing-table">
                    <div class="table-top">
                        <h5>BASIC pack</h5>
                        <div class="price">$50</div>
                        <div class="text">Per Installation</div>
                    </div>
                    <div class="table-bottom">
                        <ul class="list">
                            <li><span>FREE</span> Installation</li>
                            <li>All Unique Designs Library</li>
                            <li>Flooring & Paving</li>
                            <li>Complete Site Washing</li>
                        </ul>
                        <div class="button">
                            <a href="#" class="btn-three">choose plan</a>
                        </div>
                    </div>
                </div>
                <div class="pricing-table active">
                    <div class="table-top">
                        <h5>standard pack</h5>
                        <div class="price">$70</div>
                        <div class="text">Per Installation</div>
                    </div>
                    <div class="table-bottom">
                        <ul class="list">
                            <li><span>FREE</span> Installation</li>
                            <li>All Unique Designs Library</li>
                            <li>Flooring & Paving</li>
                            <li>Complete Site Washing</li>
                        </ul>
                        <div class="button">
                            <a href="#" class="btn-three">choose plan</a>
                        </div>
                    </div>
                </div>
                <div class="pricing-table">
                    <div class="table-top">
                        <h5>premium pack</h5>
                        <div class="price">$90</div>
                        <div class="text">Per Installation</div>
                    </div>
                    <div class="table-bottom">
                        <ul class="list">
                            <li><span>FREE</span> Installation</li>
                            <li>All Unique Designs Library</li>
                            <li>Flooring & Paving</li>
                            <li>Complete Site Washing</li>
                        </ul>
                        <div class="button">
                            <a href="#" class="btn-three">choose plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing-section end -->


    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="container">
            <div class="sec-title centred"><h2>From The Blog</h2></div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                    <div class="single-item">
                        <div class="img-box">
                          <a href="blog-details.html"><figure><img src="images/news/1.jpg" alt=""></figure></a>
                          <div class="date">31 August 2017</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">We Know Your Project Well</a></h4>
                            <div class="meta">Posted by John Shaw</div>
                            <div class="text">
                                <p>Dolor sit amet consectetur elit Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit sed eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="button"><a href="blog-details.html">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                    <div class="single-item">
                        <div class="img-box">
                          <a href="blog-details.html"><figure><img src="images/news/2.jpg" alt=""></figure></a>
                          <div class="date">31 August 2017</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">We Know Your Project Well</a></h4>
                            <div class="meta">Posted by John Shaw</div>
                            <div class="text">
                                <p>Dolor sit amet consectetur elit Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit sed eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="button"><a href="blog-details.html">read more</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 news-column">
                    <div class="single-item">
                        <div class="img-box">
                          <a href="blog-details.html"><figure><img src="images/news/3.jpg" alt=""></figure></a>
                          <div class="date">31 August 2017</div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="blog-details.html">We Know Your Project Well</a></h4>
                            <div class="meta">Posted by John Shaw</div>
                            <div class="text">
                                <p>Dolor sit amet consectetur elit Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit sed eiusmod
                                tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="button"><a href="blog-details.html">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news section end -->


    <!-- call-out -->
    <section class="call-out sec-pad centred">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 column">
                    <div class="call-out-content">
                        <div class="title-text">Get Your All Kinds Of Flooring & Paving
                        Work Done By Us!</div>
                        <div class="text">For Free Estimate, Dial <span>(320) 987-6543</span>  Or Email <span>sale@Palatka.com</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- call-out section end -->


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
        <div class="footer-bottom container">
            <p class="text col-md-9">©2023 - Mod Ceramic Industries Ltd.</p>
            <p class="text col-md-3">Powered By: Perfetto Solutions</p>
        </div>
    </footer>
    <!-- main footer area end -->



<!--End bodywrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->


<script type="text/javascript" src="{{asset('asset/js/jquery-2.1.4.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('asset/js/wow.js')}}"></script>
<script src="{{asset('asset/js/isotope.js')}}"></script>
<script src="{{asset('asset/js/validation.js')}}"></script>
<script src="{{asset('asset/js/jquery-ui.js')}}"></script>
<script src="{{asset('asset/js/jquery.fancybox.pack.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/js/SmoothScroll.js')}}"></script>
<script src="{{asset('asset/js/revolution.min.js')}}"></script>

<script src="{{asset('asset/js/script.js')}}"></script>

<!-- End of .page_wrapper -->
</body>
</html>
