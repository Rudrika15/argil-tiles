@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Read client testimonials for engineered stone and rigid-core vinyl. See why homeowners and businesses trust our quality.">
    <meta name="keywords"
        content="customer reviews, engineered stone reviews, rigid-core vinyl reviews">
    <meta property="og:title" content="Customer Testimonials | Surface Manufacturer">
    <meta property="og:description"
        content="Explore customer testimonials for premium engineered stone and rigid-core vinyl across residential and commercial projects.">
    <meta property="og:url" content="https://argiltiles.com/testimonial">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mod Ceramic Industries">
    <meta property="og:image" content="https://argiltiles.com/asset/images/logo/logo.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Customer Testimonials | Surface Manufacturer">
    <meta name="twitter:description"
        content="See what customers say about our engineered stone and rigid-core vinyl projects.">
    <meta name="twitter:image" content="https://argiltiles.com/asset/images/logo/logo.png">
    <link rel="canonical" href="https://argiltiles.com/testimonial">
    <title>Customer Testimonials | Surface & Vinyl Reviews</title>
@endsection
@section('content')

<section class="py-5">
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold text-center">Testimonials</h1>
        </div>
    </div>
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Clients Say</h2>
            <p class="text-muted mb-3">
                Trusted by architects, builders, interior designers, and project developers.
            </p>
            <p class="text-muted mx-auto mb-3 max-w-780">
                These reviews reflect real experience with our engineered slabs and rigid-core vinyl—from kitchen
                countertops and bathroom vanities to commercial floors and large residential projects. Feedback covers
                product quality, finish consistency, delivery support, and how our Morbi manufacturing team works with
                partners across India and export markets. Read a few stories below, then contact us when you want similar
                performance for your next kitchen, showroom, or multi-unit development.
            </p>
            <p class="text-muted mx-auto max-w-780">
                Homeowners often mention stain resistance and easy cleaning on kitchen platforms. Commercial clients
                highlight waterproof rigid-core floors in retail and hospitality spaces where downtime must stay low.
                Distributors value predictable lead times and clear documentation for tenders. Together, these voices
                show how our surfaces perform after installation—not only on day one. If you have completed a project with
                our materials and want to share feedback, contact the Morbi team—we welcome reviews that help future
                buyers choose with confidence. Looking for project photos that match these comments? Browse our case
                studies for kitchens, hotels, and retail interiors using the same product families. Your next specification
                can start with these lived experiences rather than catalogue pages alone. Thank you to every client who
                shared their story with our team.                 We publish new reviews as they are verified.                 Browse freely, then contact us when you are ready to specify materials for your project.
            </p>
        </div>

        <div class="row mb-5">
            <div class="col-lg-10 mx-auto">
                <h2 class="h5 fw-bold text-center">Why these reviews matter</h2>
                <p class="text-muted text-center mb-0">
                    Independent feedback helps new buyers understand day-to-day performance: cleaning routines, finish
                    consistency across batches, and how our team supports architects through sampling and dispatch.
                    Combine these voices with catalogue downloads and case studies for a complete specification picture.
                </p>
            </div>
        </div>

        <div class="row">
            @foreach($testimonials as $testimonial)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card h-100">
                    <div class="card-body">
                        <div class="testimonial-rating">
                            @for($i = 1; $i <= $testimonial->rating; $i++)
                                <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>
                        <p class="testimonial-text">
                            {{ \App\Support\SeoCopy::soften(strip_tags($testimonial->testimonial)) }}
                        </p>
                        <div class="d-flex align-items-center mt-2">
                            <div class="client-image me-3">
                                {{ strtoupper(substr(trim($testimonial->client_name), 0, 1)) }}
                            </div>
                            <div>
                                <div class="client-name">{{ $testimonial->client_name }}</div>
                                @if($testimonial->designation)
                                    <div class="client-designation">{{ $testimonial->designation }}</div>
                                @endif
                                @if($testimonial->company_name)
                                    <div class="client-company">{{ $testimonial->company_name }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
