<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@yield('seosection')
    <title>Argil Tiles</title>
    <style>
        .navbar {
            transition: all 0.3s ease;
            padding: 1.2rem 1rem;
            background-color: white;
        }

        .sticky-navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
            background-color: white;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="d-flex justify-content-between mb-3">

                <div class="p-2 text-white "><a href="tel:99255-11465" class="text-white text-decoration-none"> (+91) 99255-11465</a></div>
                <div class="p-2 text-white ">
                    <a href="https://www.facebook.com/argilgroup/" target="blank" class="text-white text-decoration-none"><i class="bi bi-facebook me-3"></i></a>
                    <a href="https://www.instagram.com/argilgroup/" target="blank" class="text-white text-decoration-none"><i class="bi bi-instagram me-3"></i></a>
                    <a href="https://www.linkedin.com/company/argilgroup/?viewAsMember=true" target="blank" class="text-white text-decoration-none"><i class="bi bi-linkedin me-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/asset/logo.png') }}" alt="argil tiles logo" loading="lazy" class="" style="height: 65px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Corporate
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/about">About</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/documentaryfilm">Documentary film</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/corevalues">Core value</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/groupcompany">Company group</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/achievements">Achievements</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/plants">Plants</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/quality">Qulity</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/quartzsurface">Quartz surface</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/spcproducts">SPC Products</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/blogs" tabindex="-1" aria-disabled="true">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/catalogue" tabindex="-1" aria-disabled="true">catalogue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/contact" tabindex="-1" aria-disabled="true">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Video Section -->
   @yield('content')
    <!-- footer -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->

            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="{{ asset('assets/asset/footerlogo.png')}}" class="img-fluid w-50" alt="argil footerlogo" loading="lazy" />
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Quick Links
                        </h6>
                        <p>
                            <a href="/profile" class="text-reset">Corporate</a>
                        </p>
                        <p>
                            <a href="/quartzsurface" class="text-reset">Product</a>
                        </p>
                        <p>
                            <a href="/catalogue" class="text-reset">Catalogue</a>
                        </p>
                        <p>
                            <a href="/contact" class="text-reset">Contact</a>
                        </p>
                        <p>
                            <a href="/privacyPolicy" class="text-reset">Privacy</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Download Our App


                        </h6>
                        <p>
                            <img src="{{ asset('assets/asset/playstore.png')}}" loading ="lazy" alt="argil-playstore-link" class="w-75">
                        </p>
                        <p>
                            <img src="{{ asset('assets/asset/appstore.png')}}"  loading ="lazy"alt="argil-appstore-link" class="w-75">
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact info</h6>
                        <p><i class="bi bi-geo-alt mx-3"></i>Mod Ceramic Industries Ltd.
                        </p>
                        <p class="mx-5">8-A, National Highway, Morbi
                        </p>

                        <p class="mx-5">
                            (Gujarat), India 363 642</p>

                        <p><i class="bi bi-telephone me-3 mx-3"></i><a href="tel:2822 240628" class="text-decoration-none" style="color: inherit !important;">+ 91 2822 240628</a></p>
                        <p> <i class="bi bi-envelope me-3 mx-3"></i>
                            <a href="mailto:info@argilties.com" class="text-decoration-none" style="color: inherit !important;">info@argilties.com</a>
                        </p>
                        <p class="mx-5">
                            <a href="https://www.facebook.com/argilgroup/" target="blank" class="text-decoration-none" style="color: inherit !important;"><i class="bi bi-facebook me-3"></i></a>
                            <a href="https://www.instagram.com/argilgroup/" target="blank" class="text-decoration-none" style="color: inherit !important;"><i class="bi bi-instagram me-3"></i></a>
                            <a href="https://www.linkedin.com/company/argilgroup/?viewAsMember=true" target="blank" class="text-decoration-none" style="color: inherit !important;"><i class="bi bi-linkedin me-3"></i></a>

                        </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="d-flex justify-content-around p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <div>

                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">©2025 - Mod Ceramic Industries Ltd.

                </a>
            </div>
            <div>

                <a class="text-reset fw-bold" href="https://flipcodesolutions.com/" target="_blank">Flipcode
                    Solutions</a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- footer -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 75) {
                navbar.classList.add('sticky-navbar');
            } else {
                navbar.classList.remove('sticky-navbar');
            }
        });
    </script>
</body>

</html>
