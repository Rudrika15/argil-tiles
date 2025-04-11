<!DOCTYPE html>
<html lang="en">

<head>
    @hasSection('seosection')
        @yield('seosection')
    @else
    @endif

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Argil is a leading artificial quartz stone slab manufacturer in Morbi, Gujarat, India.
Explore premium quartz surfaces for homes and businesses.">

        <meta name="author" content="Argil Group">
        <meta name="theme-color" content="#000000">
        <meta name="geo.region" content="IN-GJ">
        <meta name="geo.placename" content="Morbi">
        <meta name="geo.position" content="22.82587;70.847998">
        <meta name="ICBM" content="22.82587, 70.847998">
        <meta property="og:title" content="Artificial Quartz Stone Slab
Manufacturers In Morbi, Gujarat, India | Argil"
            data-react- helmet="true">
        <meta property="og:type" content="website" data-react-helmet=
"true">
<meta property="og:site_name" content="Argil Group">
        <meta property="og:url" content="https://www.argiltiles.com/" data-react-helmet="true">
        <meta property="og:description"
            content="Argil is an artificial
quartz stone slab manufacturer in Morbi, Gujarat, India. We
have the best-engineered quartz surface stone for kitchen and
platform at a reasonable price. We have 10+ yrs of service.
Get a price quote "
            data-react-helmet="true">
        <meta property="og:image" content="Image URL" data-react- helmet="true">
        <meta name="twitter:card" content="summary_large_image" data-react-helmet="true">
        <meta name="twitter:site" content="@argiltiles" data-react- helmet="true">
        <meta name="twitter:title" content="Artificial Quartz Stone Slab
Manufacturers In Morbi, Gujarat, India | Argil"
            data-react- helmet="true">
        <meta name="twitter:description"
            content="Argil is an artificial
quartz stone slab manufacturer in Morbi, Gujarat, India. We
have the best-engineered quartz surface stone for kitchen and
platform at a reasonable price. We have 10+ yrs of service.
Get a price quote "
            data-react-helmet="true">
        <meta name="twitter:image" content="Image URL" data-react- helmet="true">
        <link rel="canonical" href="https://dev.argiltiles.com/" data- react-helmet="true">
        <link rel="icon" href="/logo_bg.png">


        <meta name="robots" content="index, follow" />
        {{-- <meta name="robots" content="index, follow" /> --}}
        <meta name="keywords"
            content="Artificial Quartz, Quartz Slabs, Quartz Manufacturers, Morbi Quartz, India Quartz Stone">
        <meta name="publisher" content="Argil Tiles" />

    <link rel="icon" href="{{ asset('asset/images/logo/logo.png') }}">


    <!-- Stylesheets -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">
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
                    <i class="fa fa-phone">&nbsp;Call Now For Free Estimate!&nbsp;<span><a href="tel:2822-240628">(+91)
                                2822-240628</a></span></i>
                </div>
                <div class="top-right">
                    <ul class="social-top">
                        <li><a href="https://www.facebook.com/argilgroup/"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/argilgroup/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    {{-- <ul class="social-top">
                        <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <!-- end header upper -->

        <!-- header lower -->
        <div class="header-lower">
            <div class="container">
                <div class="logo-box">
                    <a href="/">
                        <figure>
                            <img src="{{ asset('asset/images/logo/logo.png') }}" alt="argil logo" class="img-responsive"
                                style="width: 150px">
                        </figure>
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
                                    <a href="tel:9925511465">
                                        <i class="fa fa-phone">+91 99255 11465</span></i>
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
                    <a href="/">
                        <figure><img src="{{ asset('asset/images/logo/logo.png') }}" alt="argile logo"
                                class="img-responsive"></figure>
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
                                    <a href="tel:9925511465">
                                        <i class="fa fa-phone">+91 99255 11465</span></i>
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



    <!-- main footer area -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <div class='footer-logo'><a href="/">
                                    <figure><img src="{{ asset('asset/images/argileimage/footerlogo.png') }}"
                                            alt="footer logo"class="img-responsive"></figure>
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
                            <div class="quick-link-div">
                            <div class="title">
                                <h5>Quick Links</h5>
                            </div>
                        </div>
                            <ul class="list">
                                <li><a href="/profile">Corporate</a></li>
                                <li><a href="/quartzsurface">Products</a></li>
                                <li><a href="/catalogue">Catalogue</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/privacyPolicy">Privacy</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="subscribe-wideget footer-widget">
                            <div class="title">
                                <h5>Download Our App</h5>
                            </div>
                            <div class="downloadlink">
                                <img src="{{ asset('asset/images/argileimage/playstore.png') }}" alt="playstore logo"
                                    width="55%" class="img-responsive">
                            </div>
                            <div class="downloadlink1">
                                <img src="{{ asset('asset/images/argileimage/appstore.png') }}" alt="appstore logo"
                                    width="55%" class="img-responsive">
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
                                <a href="tel:2822240628">
                                    <p>+91 2822 240628,</p>
                                </a>
                                <a href="tel:9925511465">
                                    <p>+91 99255 11465</p>
                                </a>
                            </div>
                            <div class="single-box">
                                <div class="icon-box"><i class="fa fa-envelope"></i></div>
                                <a href="mailto:info@argiltiles.com">
                                    <p>info@argilties.com</p>
                                </a>
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
            <p class="text col-md-3"><a href="https://flipcodesolutions.com/" target="blank">Powered By: FlipCode
                    Solutions</a></p>
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
</body>

</html>
