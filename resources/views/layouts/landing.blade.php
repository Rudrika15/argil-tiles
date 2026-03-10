<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('icons/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('icons/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('icons/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icons/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('icons/site.webmanifest') }}" />
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('icons/web-app-manifest-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('icons/web-app-manifest-512x512.png') }}">

    <meta name="theme-color" content="#ffffff">

    <!-- Favicon & App Icons -->






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>

    <!-- country CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- country JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" defer></script>



</head>

<body>

    <!-- Header -->
    {{-- <header class="header py-3 px-4 bg-light d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="logo">Argil Group</a>
        <a href="#quote-form" class="btn btn-primary">Request Export Quote</a>
    </header> --}}
    <div class="main">
        <div class="container">
            <div class="d-flex justify-content-between mb-3">

                <div class="p-2 text-white "><a href="tel:99255-11465" class="text-white text-decoration-none"> (+91)
                        99255-11465</a></div>
                <div class="p-2 text-white ">
                    <a href="https://www.facebook.com/argilgroup/" target="blank"
                        class="text-white text-decoration-none"><i class="bi bi-facebook me-3"></i></a>
                    <a href="https://www.instagram.com/argilgroup/" target="blank"
                        class="text-white text-decoration-none"><i class="bi bi-instagram me-3"></i></a>
                    <a href="https://www.linkedin.com/company/argilgroup/" target="blank"
                        class="text-white text-decoration-none"><i class="bi bi-linkedin me-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/asset/logo.png') }}" alt="argil tiles logo" title ="argil tiles logo"
                    loading="lazy" class="" style="height: 65px;" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#quote-form" class="btn btn-primary">Request Export Quote</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer py-5 bg-dark text-white">
        <div class="container">
            <div class="row ">

                <!-- Contact Section -->
                <div class="col-12 col-md-2 mb-4 ">
                    <h5 class="mb-3">Contact Us</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt me-2"></i>Argil Group  8-A,
                            <br />
                            <span>
                                National Highway, </span>
                            <br />
                            <span>
                                Morbi(Gujarat)-363642
                            </span>
                            <br />
                            <span>
                                India
                            </span>
                        </p>

                    <p class="mb-2">
                        <i class="bi bi-envelope me-2"></i>
                        <a href="mailto:info@argilties.com" class="text-white text-decoration-none">
                         info@argilties.com
                        </a>
                    </p>

                    <p class="mb-2">
                        <i class="bi bi-whatsapp me-2"></i>
                        <a href="https://wa.me/919925511465" target="_blank" rel="noopener noreferrer"
                            class="text-white text-decoration-none">
                            +91 99255 11465
                        </a>
                    </p>

                    <p class="mb-2">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <a href="tel:+919925511465" class="text-white text-decoration-none">
                            +91 99255 11465
                        </a>
                    </p>
                </div>

                {{-- download section --}}
                 <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                        <!-- Links -->
               <h5 class="mb-3">Download Our App
                        </h5>
                        <p class="my-4">
                            <a target="_blank"
                                href="https://play.google.com/store/apps/details?id=com.arjil.argil_tiles">
                                {{-- <img src="{{ asset('assets/asset/playstore.png') }}" loading ="lazy"
                                    alt="argil-playstore-link" title="argil-playstore-link" class="w-75"> --}}
                                <img src="{{ asset('assets/asset/playstore.png') }}"
                                    alt="Download Argil App on Google Play Store" title="Argil Play Store Link"
                                    class="img-fluid w-75" width="138" height="41" loading="lazy">
                            </a>
                        </p>
                        <p>
                            <a href="https://apps.apple.com/in/app/argil-group/id6746482165" target="_blank">

                                {{-- <img src="{{ asset('assets/asset/appstore.png') }}"
                                    loading ="lazy"alt="argil-appstore-link" title="argil-appstore-link"
                                    class="w-75"> --}}
                                <img src="{{ asset('assets/asset/appstore.png') }}"
                                    alt="Download Argil App on Apple App Store" title="Argil App Store Link"
                                    class="img-fluid w-75" loading="lazy">
                            </a>
                        </p>
                    </div>

                <!-- Social Links -->
                <div class="col-12 col-md-2 mb-4 text-center">

                    <h5 class="mb-3">Follow Us</h5>

                    <div class="d-flex justify-content-center align-items-center pt-1">

                        <a href="https://www.linkedin.com/company/argilgroup/?viewAsMember=true" target="_blank"
                            rel="noopener noreferrer" class="text-white fs-4 m-3">
                            <i class="bi bi-linkedin"></i>
                        </a>

                        <a href="https://www.facebook.com/argilgroup/" target="_blank" rel="noopener noreferrer"
                            class="text-white fs-4 m-3">
                            <i class="bi bi-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/argilgroup/" target="_blank" rel="noopener noreferrer"
                            class="text-white fs-4 m-3">
                            <i class="bi bi-instagram"></i>
                        </a>

                    </div>

                </div>




            </div>
        </div>
    </footer>



    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- SweetAlert2 toaster (common use) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof Swal === 'undefined') return;

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
            });

            @if (session('success'))
                Toast.fire({
                    icon: 'success',
                    title: {!! json_encode(session('success')) !!}
                });
            @endif

            @if (session('error'))
                Toast.fire({
                    icon: 'error',
                    title: {!! json_encode(session('error')) !!}
                });
            @endif

            @if (session('warning'))
                Toast.fire({
                    icon: 'warning',
                    title: {!! json_encode(session('warning')) !!}
                });
            @endif

            @if ($errors->any())
                // show first validation error in toast
                Toast.fire({
                    icon: 'error',
                    title: {!! json_encode($errors->first()) !!}
                });
            @endif
        });
    </script>
</body>

</html>
