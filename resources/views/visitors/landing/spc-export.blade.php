@extends('layouts.landing')

@section('title', 'SPC Flooring Export from India | Argil Group')
@section('meta_description',
    'Looking to import SPC flooring? Argil Group offers export-ready, certified SPC flooring
    with a wide range of designs. Request a quote today!')

@section('content')

    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Premium SPC Flooring – Export-Ready from India</h1>
            <p class="lead mt-3">Durable, stylish, and certified SPC flooring, delivered worldwide for distributors,
                importers, and interior designers.</p>
            <a href="#quote-form" class="btn btn-light btn-lg mt-3">Request Export Quote</a>
            <a href="https://argiltiles.com/pdf/CATALOGUE.pdf" class="btn btn-outline-light btn-lg mt-3">Download SPC
                Catalog</a>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-us py-5">
        <div class="container">
            <h2 class="text-center mb-4">Why International Buyers Choose Argil Group</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <h5>ISO Certified</h5>
                    <p>Premium quality SPC flooring certified for global standards.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Wide Designs</h5>
                    <p>Modern textures, colors, and customizable sizes.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Reliable Exports</h5>
                    <p>Proven track record in timely shipments worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="products py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our SPC Flooring Collection</h2>
            <div class="row">
                <!-- Product Example -->
                <div class="col-md-4 mb-3">
                    <div class="card h-100">
                        <img src="{{ asset('images/spc-classic-oak.jpg') }}" class="card-img-top" alt="SPC Classic Oak">
                        <div class="card-body">
                            <h5 class="card-title">SPC Classic Oak</h5>
                            <p>Thickness: 5mm | Finish: Matte | MOQ: 500 sqm</p>
                            <a href="#quote-form" class="btn btn-primary">Request Quote</a>
                        </div>
                    </div>
                </div>
                <!-- Repeat similar cards for other products -->
            </div>
        </div>
    </section>

    <!-- Export Process -->
    <section class="export-process py-5">
        <div class="container">
            <h2 class="text-center mb-4">Simple & Transparent Export Process</h2>
            <div class="row text-center">
                <div class="col-md-2 mb-3">
                    <h5>1. Inquiry</h5>
                </div>
                <div class="col-md-2 mb-3">
                    <h5>2. Sample Approval</h5>
                </div>
                <div class="col-md-2 mb-3">
                    <h5>3. Order & Payment</h5>
                </div>
                <div class="col-md-2 mb-3">
                    <h5>4. Packaging & Shipment</h5>
                </div>
                <div class="col-md-2 mb-3">
                    <h5>5. Global Delivery</h5>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Trusted by International Buyers</h2>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <blockquote class="blockquote">
                        <p>"Argil Group’s SPC flooring quality is exceptional. Our import orders arrived on time and
                            exceeded expectations."</p>
                        <footer class="blockquote-footer">John Smith, Distributor, UK</footer>
                    </blockquote>
                </div>
                <div class="col-md-6 mb-3">
                    <blockquote class="blockquote">
                        <p>"Working with Argil Group for our interior projects was seamless. Their export team made the
                            entire process smooth and reliable."</p>
                        <footer class="blockquote-footer">Sarah Ahmed, Interior Designer, UAE</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Form -->
    <section id="quote-form" class="quote-form py-5">
        <div class="container">
            <h2 class="text-center mb-4">Get Your SPC Export Quote Today</h2>
            {{-- <form action="{{ route('spc.export.submit') }}" method="POST"> --}}
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="phone" class="form-control" placeholder="Phone / WhatsApp" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="text" name="country" class="form-control" placeholder="Country" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <textarea name="message" class="form-control" placeholder="Message / Product Interest" rows="4"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Request Quote</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

@endsection
