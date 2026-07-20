@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore Argil's commitment to
high-quality tile manufacturing. Discover our industry-leading quality
assurance and testing processes." />
    <meta name="keywords"
        content="Argil Tiles Quality, Tile Manufacturing,
Quality Assurance, Ceramic Testing, Premium Tiles" />
    <meta property="og:title" content="Argil Group Quality Standards –
Excellence in Every Slab">
    <meta property="og:description"
        content="At Argil Group, we adhere to the
 highest quality standards in artificial quartz stone manufacturing. Precision,
durability, and innovation define our products.">

    <meta property="og:url" content="https://argiltiles.com/quality">
    <meta name="twitter:title" content="Argil Group Quality Standards –
Excellence in Every Slab">
    <meta name="twitter:description"
        content="Discover Argil Group’s
commitment to premium quality in artificial quartz stone manufacturing.
Our rigorous testing ensures durability, strength, and beauty.">

    <link rel="canonical" href="https://argiltiles.com/quality" data-react-
    helmet="true">
    <title>Argil Quality Standards | Premium Tile Manufacturing</title>
@endsection
@section('content')
     <!-- breadcrumb -->
     <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Quality</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pt-5 text-justify">
                    In the past 65 odd years of working in semi professional and professional environment, we have
                    observed that quality is not limited to products, but to all activities that we do. From smallest of
                    the tasks like keying in an invoice data to closing the biggest deal, quality is required at every
                    stage and at all levels. We have some quality and standard certificates.
                </p>
            </div>
        </div>
        <div class="row py-4">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/asset/qualityimage1.jpeg')}}" alt="argil ISO CERTIFIED" title="argil ISO CERTIFIED" loading="lazy" class="img-fluid w-50">

                <h2 class="fs-5 pt-2 fw-bold">ISO CERTIFIED

                </h2>
            </div>


            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/asset/qualityimage2.jpeg')}}" alt="argil TISI THAILAND STANDARD" title="argil TISI THAILAND STANDARD" loading="lazy" class="img-fluid w-50">
                <h2 class="fs-5 pt-2 fw-bold">TISI THAILAND STANDARD

                </h2>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/asset/qualityimage3.jpeg')}}" alt="argil SLSI SRILANKAN STANDARD" title="argil SLSI SRILANKAN STANDARD" loading="lazy" class="img-fluid w-50">
                <h2 class="fs-5 pt-2 fw-bold">SLSI SRILANKAN STANDARD

                </h2>
            </div>


        </div>

    </div>

@endsection
