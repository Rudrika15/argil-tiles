@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore our commitment to high-quality surface manufacturing. Discover industry-leading quality assurance and testing processes." />
    <meta name="keywords"
        content="quality standards, surface manufacturing, quality assurance, product testing, premium slabs" />
    <meta property="og:title" content="Quality Standards – Excellence in Every Slab">
    <meta property="og:description"
        content="We adhere to high quality standards in engineered stone manufacturing. Precision, durability, and innovation define our products.">

    <meta property="og:url" content="https://argiltiles.com/quality">
    <meta name="twitter:title" content="Quality Standards – Excellence in Every Slab">
    <meta name="twitter:description"
        content="Discover our commitment to premium quality in engineered stone manufacturing. Rigorous testing ensures durability, strength, and beauty.">

    <link rel="canonical" href="https://argiltiles.com/quality" data-react-
    helmet="true">
    <title>Quality Standards | Premium Surface Manufacturing</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/qualityimage1.jpeg') }}" fetchpriority="high">
@endsection
@section('content')
     <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Home / Quality</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <p class="pt-5 lead">
                    Quality is not limited to finished products—it applies to every activity we perform. From entering
                    invoice data to closing the largest project deal, disciplined standards matter at every stage.
                </p>
                <p class="text-muted">
                    Over decades in semi-professional and professional manufacturing environments, our team has built
                    routines for material inspection, process control, and final checks before slabs or vinyl leave the
                    plant. That mindset protects colour consistency, dimensional accuracy, and long-term performance for
                    kitchens, bathrooms, commercial interiors, and export shipments.
                </p>
                <h2 class="h4 fw-bold mt-4">What we verify before dispatch</h2>
                <p class="text-muted">
                    Incoming raw materials are checked against agreed specifications. During production we monitor batch
                    records, finish uniformity, and calibration of polishing and pressing equipment. Before packing we
                    review visual grade, edge integrity, and labeling so distributors and project sites receive goods that
                    match the approved samples and catalogue references.
                </p>
                <p class="text-muted mb-4">
                    Independent certifications reinforce this culture. International and regional standards help buyers in
                    India and overseas markets trust that our surfaces meet documented requirements for safety, durability,
                    and manufacturing discipline.
                </p>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-4 text-center mb-4">
                <img src="{{ asset('assets/asset/qualityimage1.jpeg')}}" alt="ISO certified badge" title="ISO CERTIFIED" width="250" height="250" loading="eager" fetchpriority="high" decoding="async" class="img-fluid w-50">
                <h2 class="fs-5 pt-2 fw-bold">ISO CERTIFIED</h2>
                <p class="text-muted small px-3">
                    ISO-aligned quality management supports repeatable processes, documented procedures, and continuous
                    improvement across our Morbi manufacturing operations.
                </p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="{{ asset('assets/asset/qualityimage2.jpeg')}}" alt="TISI Thailand standard badge" title="TISI THAILAND STANDARD" loading="eager" decoding="async" class="img-fluid w-50">
                <h2 class="fs-5 pt-2 fw-bold">TISI THAILAND STANDARD</h2>
                <p class="text-muted small px-3">
                    Recognition against Thailand Industrial Standards Institute criteria helps partners serving Southeast
                    Asian projects specify our products with greater confidence.
                </p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="{{ asset('assets/asset/qualityimage3.jpeg')}}" alt="SLSI Sri Lanka standard badge" title="SLSI SRILANKAN STANDARD" loading="lazy" class="img-fluid w-50">
                <h2 class="fs-5 pt-2 fw-bold">SLSI SRILANKAN STANDARD</h2>
                <p class="text-muted small px-3">
                    Alignment with Sri Lanka Standards Institution expectations supports regional distribution and
                    project bids that require documented surface quality benchmarks.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-lg-10">
                <h2 class="h4 fw-bold">Working with our quality team</h2>
                <p class="text-muted mb-0">
                    Need certificates, test references, or batch-level questions for a tender? Contact our team with the
                    product series and destination market. We will share the relevant documentation and help you match
                    the right finish and thickness to your project brief.
                </p>
            </div>
        </div>
    </div>
@endsection
