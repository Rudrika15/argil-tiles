@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Browse our product catalogues for engineered stone slabs and rigid-core vinyl. Download PDF collections for kitchens, baths, and interiors." />
    <meta name="keywords" content="product catalogue, engineered stone designs, rigid-core vinyl catalogue, slab designs" />
    <meta property="og:title" content="Product Catalogues | Engineered Surfaces & Vinyl">
    <meta property="og:description"
        content="Download the latest collections of engineered stone slabs and rigid-core vinyl for kitchens, bathrooms, and commercial interiors.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://argiltiles.com/catalogue">

    <meta name="twitter:description"
        content="Discover a wide range of high-quality tiles and surfaces in our latest catalogues.">
    <meta name="twitter:title" content="Product Catalogues | Engineered Surfaces & Vinyl">
<link rel="canonical" href="https://argiltiles.com/catalogue" />
<title>Product Catalogues | Engineered Surfaces & Vinyl</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/catalogueimage.png') }}" fetchpriority="high">
@endsection
@section('content')
     <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Home / Catalogue</h1>
        </div>
    </div>
    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-lg-10">
                <p class="lead mb-3">
                    Download printable brochures for our engineered stone and rigid-core vinyl ranges. Each PDF covers sizes,
                    finishes, and popular design families for residential and commercial projects.
                </p>
                <p class="text-muted mb-0">
                    Specifiers and distributors use these catalogues to shortlist colours, compare thicknesses, and share
                    options with clients before requesting samples or a formal quote. Keep a copy for site meetings, export
                    tenders, and interior presentations—then contact our Morbi team when you are ready to lock MOQs,
                    lead times, and container planning.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <h2 class="pt-2 fw-bold">Link 'N' Lock — Rigid-Core Vinyl</h2>
                <p class="text-muted">
                    Core collection of waterproof rigid-core planks with wood and stone visuals, click profiles, and
                    wear-layer options suited to homes, retail, and light commercial floors.
                </p>
                <a href="https://argiltiles.com/pdf/1661686250890768142.pdf" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/asset/catalogueimage.png')}}" alt="vinyl catalogue cover" title="Rigid-core vinyl catalogue" width="150" height="150" loading="eager" fetchpriority="high" decoding="async" class="img-fluid">
                </a>
                <p class="mt-2"><a href="https://argiltiles.com/pdf/1661686250890768142.pdf" target="_blank" rel="noopener noreferrer">Download Link 'N' Lock PDF</a></p>
            </div>
            <div class="col-md-6">
                <h2 class="pt-2 fw-bold">Link 'N' Lock — Rigid-Core Vinyl 2025</h2>
                <p class="text-muted">
                    Updated 2025 lineup with new décor families, refreshed photography, and technical notes for installers
                    and project buyers specifying modern interiors.
                </p>
                <a href="https://argiltiles.com/pdf/CATALOGUE.pdf" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/asset/catalogueimage.png')}}" alt="2025 vinyl catalogue cover" title="2025 rigid-core vinyl catalogue" loading="eager" decoding="async" class="img-fluid">
                </a>
                <p class="mt-2"><a href="https://argiltiles.com/pdf/CATALOGUE.pdf" target="_blank" rel="noopener noreferrer">Download 2025 Catalogue PDF</a></p>
            </div>
            <div class="col-md-6">
                <h2 class="pt-2 fw-bold">Dura Engineered Stone Leaflet</h2>
                <p class="text-muted">
                    Compact leaflet for kitchen platforms, vanities, and commercial counters—highlighting finishes,
                    slab formats, and care guidance for engineered stone surfaces.
                </p>
                <a href="https://argiltiles.com/pdf/Leaflet-Dura-Quartz.pdf" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/asset/catalogueimage.png')}}" alt="engineered stone leaflet cover" title="Dura engineered stone leaflet" loading="lazy" class="img-fluid">
                </a>
                <p class="mt-2"><a href="https://argiltiles.com/pdf/Leaflet-Dura-Quartz.pdf" target="_blank" rel="noopener noreferrer">Download Dura Stone Leaflet</a></p>
            </div>
        </div>
        <div class="row mt-5 mb-4">
            <div class="col-lg-10">
                <h2 class="fw-bold h4">How to use these catalogues</h2>
                <p class="text-muted">
                    Start with the application—kitchen counters, bathroom vanities, or floor covering—then filter by tone
                    and finish. Note preferred sizes and thicknesses, share the PDF with your design team, and request
                    physical samples for critical colour matching under site lighting. For export shipments, reference the
                    catalogue series name on your inquiry so our team can confirm packing, labeling, and container mix.
                </p>
                <p class="text-muted mb-0">
                    Prefer a guided shortlist? Contact our Morbi showroom with room photos, approximate area, and budget
                    range. We will recommend catalogue pages that fit your project and arrange sample packs where available.
                </p>
            </div>
        </div>
    </div>
@endsection
