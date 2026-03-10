@extends('layouts.app')
@section('seosection')

<meta name="description"
content="{{ $meta->description ?? 'Get the latest updates, ideas, and expert insights from Argil Tiles. Explore our blog for tips on selecting and styling tiles.' }}">

<meta name="keywords"
content="{{ $meta->keywords ?? 'Argil Tiles blog, tile trends, tile inspiration, floor tile tips, wall tiles, ceramic tiles' }}">

<meta property="og:title"
content="{{ $meta->ogTitleEng ?? 'Argil Tiles Blog | Insights, Inspiration & Tile Trends' }}">

<meta property="og:description"
content="{{ $meta->ogDescriptionEng ?? 'Explore tile styling tips, product highlights, and design trends with Argil Tiles.' }}">

<meta property="og:url"
content="{{ $meta->ogUrl ?? route('blogdetails', $blog->slug) }}">

<meta name="twitter:title"
content="{{ $meta->ogTitleEng ?? 'Argil Tiles Blog | Insights & Tile Trends' }}">

<meta name="twitter:description"
content="{{ $meta->ogDescriptionEng ?? 'Stay updated with tile designs, styles, and tips from Argil Tiles.' }}">

<link rel="canonical" href="{{ url()->current() }}">

<title>{{ $meta->ogTitleEng ?? 'Argil Tiles Blog' }} | {{ $blog->title }}</title>

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

    @php
        // Split the description into two parts dynamically
        $split_position = 851; // Adjust the split point
        $first_part = substr($blog->description, 0, $split_position);
        $second_part = substr($blog->description, $split_position);
    @endphp

      <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-2">
                <img src="{{ asset('blogimage/' . $blog->image) }}"
                 alt="{{ $blog->title }}"
                    title="{{ $blog->title }}" loading="lazy"
                    class="img-fluid rounded w-100">

            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2">
                <p>{!! $blog->description !!}</p>
            </div>
        </div>


    </div>
@endsection
