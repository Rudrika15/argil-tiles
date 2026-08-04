@extends('layouts.landing')

@section('title', 'Rigid-Core Vinyl Export from India')
@section('meta_description', 'Import export-ready rigid-core vinyl from India. Certified waterproof designs for global distributors. Request a quote.')
@section('canonical', 'https://argiltiles.com/spc-export')

@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/qualityimage1.jpeg') }}" fetchpriority="high">
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="text-white text-center py-5 spc-bg-image">
        <div class="container py-5">
            <h1 class="display-4">Premium Rigid-Core Vinyl – Export-Ready from India</h1>
            <p class="lead mt-3">Durable, stylish, and certified rigid-core vinyl, delivered worldwide for distributors,
                importers, and interior designers.</p>
            <a href="#quote-form" class="btn btn-light btn-lg mt-3">Request Export Quote</a>
            <a href="https://argiltiles.com/pdf/CATALOGUE.pdf" class="btn btn-outline-light btn-lg mt-3">Download
                Catalog</a>
            {{-- <a href="https://argiltiles.com/pdf/CATALOGUE.pdf" target="_blank">
                    <img src="{{ asset('assets/asset/catalogueimage.png') }}" alt="argil catalogue" title="argil catalogue"
                        loading="lazy" class="img-fluid">
                </a> --}}
        </div>
    </section>


    <!-- Why Choose Us -->
    <section class="why-us py-5">
        <div class="container">

            <h2 class="text-center mb-4">Why International Buyers Choose Us</h2>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('assets/asset/qualityimage1.jpeg') }}" alt="ISO certified badge"
                        title="ISO CERTIFIED" loading="eager" fetchpriority="high" decoding="async" class="img-fluid w-50">
                    <h3>ISO Certified</h3>
                    <p>Premium quality rigid-core vinyl certified for global standards.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('asset/images/spc-export/Wide-Designs2.png') }}" alt="Wide Designs"
                        title="Wide Designs" loading="eager" decoding="async" class="img-fluid w-50">
                    <h3>Wide Designs</h3>
                    <p>Modern textures, colors, and customizable sizes.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <img src="{{ asset('asset/images/spc-export/Reliable-Exports3.png') }}" alt="Reliable Exports"
                        title="Reliable Exports" loading="lazy" class="img-fluid w-50">
                    <h3>Reliable Exports</h3>
                    <p>Proven track record in timely shipments worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->

    <section class="products py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Our Vinyl Collection</h2>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">

                            <img src="{{ asset('spc/' . $product->mainImg) }}" class="card-img-top"
                                alt="{{ \App\Support\SeoCopy::soften($product->names) }}" title="{{ \App\Support\SeoCopy::soften($product->names) }}">

                            <div class="card-body">
                                <h3 class="card-title">{{ \App\Support\SeoCopy::soften($product->names) }}</h3>

                                <p>
                                    Thickness: {{ $product->thicknesses }} <br>
                                    Finish: {{ $product->finish }} <br>
                                    MOQ: {{ $product->moq }}
                                </p>

                                <a href="#quote-form" class="btn btn-primary">Request Quote</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="https://argiltiles.com/spcproducts" class="btn btn-primary">View All Products</a>
            </div>
    </section>


    <!-- Export Process -->
    {{-- <section class="export-process py-5">
        <div class="container">
            <h2 class="text-center mb-4">Simple & Transparent Export Process</h2>
            <div class="row text-center justify-content-between align-items-center">
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/inquiry.svg') }}" alt="Inquiry"
                        title="Inquiry step" loading="lazy" class="img-fluid w-50">
                    <h5>1. Inquiry</h5>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/approval.svg') }}" alt="Sample Approval"
                        title="Sample approval step" loading="lazy" class="img-fluid w-50">
                    <h5>2. Sample Approval</h5>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/payment-new.svg') }}" alt="Order and Payment"
                        title="Order and payment step" loading="lazy" class="img-fluid w-50">
                    <h5>3. Order & Payment</h5>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/packaging.svg') }}" alt="Packaging and Shipment"
                        title="Packaging and shipment step" loading="lazy" class="img-fluid w-50">
                    <h5>4. Packaging & Shipment</h5>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/global-delivery.svg') }}" alt="Global Delivery"
                        title="Global delivery step" loading="lazy" class="img-fluid w-50">
                    <h5>5. Global Delivery</h5>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="export-process py-5">
        <div class="container ">
            <h2 class="text-center mb-4">Simple & Transparent Export Process</h2>
            <div class="row text-center justify-content-between align-items-center">
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/question.svg') }}" alt="Inquiry"
                        title="Inquiry step" loading="lazy" class="img-fluid w-50 p-2">
                    <h3 class="py-2">Inquiry</h3>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/approval-new.svg') }}" alt="Sample Approval"
                        title="Sample approval step" loading="lazy" class="img-fluid w-50 p-2">
                    <h3 class="py-2">Sample Approval</h3>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/payment-new.svg') }}" alt="Order and Payment"
                        title="Order and payment step" loading="lazy" class="img-fluid w-50 p-2">
                    <h3 class="py-2">Order & Payment</h3>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/packaging-new.svg') }}" alt="Packaging and Shipment"
                        title="Packaging and shipment step" loading="lazy" class="img-fluid w-50 p-2">
                    <h3 class="py-2">Packaging & Shipment</h3>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <img src="{{ asset('asset/images/spc-export/global-delivery-new.svg') }}" alt="Global Delivery"
                        title="Global delivery step" loading="lazy" class="img-fluid w-50 p-2">
                    <h3 class="py-2">Global Delivery</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials (carousel) -->
    {{-- <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Trusted by International Buyers</h2>

            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Product quality is exceptional. Our import orders arrived
                                on
                                time and exceeded expectations."</p>
                            <footer class="blockquote-footer">John Smith, Distributor, UK</footer>
                        </blockquote>
                    </div>

                    <div class="carousel-item">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Working with this manufacturer for our interior projects was seamless. Their
                                export
                                team made the entire process smooth and reliable."</p>
                            <footer class="blockquote-footer">Sarah Ahmed, Interior Designer, UAE</footer>
                        </blockquote>
                    </div>

                    <div class="carousel-item">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Great product consistency and timely shipments. Highly recommended for
                                international
                                partners."</p>
                            <footer class="blockquote-footer">Luca Romano, Importer, Italy</footer>
                        </blockquote>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section> --}}
    <section class="testimonials py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Trusted by Buyers</h2>

            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner text-center">
                    <div class="carousel-item active">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Wide Product Range: From ceramic tiles to designer collections, the product
                                selection is diverse and well-categorized."</p>
                            <footer class="blockquote-footer">Gunjan Chhatbar</footer>
                        </blockquote>
                    </div>

                    <div class="carousel-item">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Their floor covering options are modern and practical. We loved the texture and
                                wood-like finish of the rigid-core tiles.
                                "</p>
                            <footer class="blockquote-footer">Rudrika Dave</footer>
                        </blockquote>
                    </div>

                    <div class="carousel-item">
                        <blockquote class="blockquote mx-auto" style="max-width:720px;">
                            <p class="mb-3">"Consistent quality and service.
                                This is our third project using these products. They never disappoint. Highly dependable."
                            </p>
                            <footer class="blockquote-footer">Nishant Dabhi</footer>
                        </blockquote>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Quote Form -->
    <section id="quote-form" class="quote-form py-5">
        <div class="container">
            <h2 class="text-center mb-4">Get Your Export Quote Today</h2>

            <form action="{{ route('spc.export.submit') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Name" required>
                        @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="company_name" value="{{ old('company_name') }}"
                            class="form-control" placeholder="Company Name" required>
                        @error('company_name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            placeholder="Email" required>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" name="contactno" value="{{ old('contactno') }}" class="form-control"
                            placeholder="Phone / WhatsApp" required>
                        @error('contactno')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="text" name="country" value="{{ old('country') }}" class="form-control"
                            placeholder="Country" required>
                        @error('country')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <textarea name="message" class="form-control" placeholder="Message / Product Interest" rows="4">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Request Quote</button>
                    </div>

                </div>
            </form>
        </div>
    </section>



@endsection
