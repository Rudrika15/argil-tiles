@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Get the latest updates, ideas, and expert insights from Argil Tiles. Explore our blog for tips on selecting and styling tiles.">
    <meta name="keywords"
        content="Argil Tiles blog, tile trends, tile inspiration, floor tile tips, wall tiles, ceramic tiles">
    <meta property="og:title" content="Argil Tiles Blog | Insights, Inspiration & Tile Trends">
    <meta property="og:description"
        content="Explore tile styling tips, product highlights, and design trends with Argil Tiles.">
    <meta property="og:url" content="https://argiltiles.com/blogdetails/{{ $blog->slug }}">
    <meta name="twitter:title" content="Argil Tiles Blog | Insights & Tile Trends">
    <meta name="twitter:description" content="Stay updated with tile designs, styles, and tips from Argil Tiles.">

    <link rel="canonical" href="https://argiltiles.com/blogdetails/{{ $blog->slug }}" data-react-helmet="true">

    <title>Argil Tiles Blog | {{ $blog->title }}</title>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold text-center"> {{ $blog->title }}</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->


    {{-- <div class="container mt-4">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="Blog Image" class="img-fluid rounded">
                </div>

                <div class="col-md-7">
                    <div class="content">
                        <p class="text-justify">{!! nl2br(e($blog->description)) !!}</p>
                    </div>
                </div>
            </div>
        </div> --}}
    @php
        // Split the description into two parts dynamically
        $split_position = 851; // Adjust the split point
        $first_part = substr($blog->description, 0, $split_position);
        $second_part = substr($blog->description, $split_position);
    @endphp
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-2">
                <img src="{{ asset('blogimage/' . $blog->image) }}" alt="argil blog" title="argil blog" loading="lazy"
                    class="img-fluid rounded w-100">

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2">
                <p>{!! $blog->description !!}</p>
            </div>
        </div>


    </div>

    {{-- <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-5 mb-3 mb-md-0">
                <img src="{{ asset('blogimage/' . $blog->image) }}" alt="argil blog" title="argil blog" loading="lazy"
                    class="img-fluid rounded w-100">
            </div>

            <!-- First Part of Description (col-md-7) -->
            <div class="col-12 col-md-7">
                <div class="content">
                    <p class="text-justify">{!! nl2br(e($first_part)) !!}</p>
                </div>
            </div>

            <!-- Second Part of Description (col-md-12) -->
            <div class="col-12">
                <div class="content mt-2">
                    <p class="text-justify">{!! nl2br(e($second_part)) !!}</p>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
