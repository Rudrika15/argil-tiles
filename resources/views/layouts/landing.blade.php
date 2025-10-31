<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
</head>

<body>

    <!-- Header -->
    <header class="header py-3 px-4 bg-light d-flex justify-content-between align-items-center">
        <a href="{{ url('/') }}" class="logo">Argil Group</a>
        <a href="#quote-form" class="btn btn-primary">Request Export Quote</a>
    </header>

    <!-- Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@argilgroup.com</p>
                    <p>WhatsApp: +91-91 9925511465</p>
                    <p>Phone: +91-91 9925511465</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <a href="https://www.linkedin.com/company/argilgroup/?viewAsMember=true"
                        class="text-white me-2">LinkedIn</a>
                    <a href="https://www.facebook.com/argilgroup/" class="text-white me-2">Facebook</a>
                    <a href="https://www.instagram.com/argilgroup/" class="text-white me-2">Instagram</a>
                </div>
                <div class="col-md-4">
                    <h5>Certifications</h5>
                    <p>ISO & Export Certified SPC Flooring</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/landing.js') }}"></script>
</body>

</html>
