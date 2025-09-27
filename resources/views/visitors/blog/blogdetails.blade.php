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
    {{-- <div class="container mt-4">
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


    </div> --}}

    <div class="container mt-4">
        <div class="row">
            <!-- Left: Blog Details -->
            <div class="col-md-8">
                <div class="mb-4">
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="{{ $blog->title }}"
                        title="{{ $blog->title }}" loading="lazy" class="img-fluid rounded w-100">
                </div>
                <div>
                    <p>{!! $blog->description !!}</p>
                    <p class="text-muted">
                        {{ $blog->created_at ? $blog->created_at->diffForHumans() : 'No date available' }}
                    </p>
                </div>
            </div>

            <!-- Right: Other Blogs -->
            <div class="col-md-4">
                <h4 class="fw-bold mb-3">Other Blogs</h4>
                <div class="list-group">
                    @foreach ($otherBlogs as $other)
                        <a href="{{ route('blogdetails', $other->slug) }}"
                            class="list-group-item list-group-item-action mb-2 shadow-sm rounded">
                            <div class="d-flex flex-column">
                                <span class="fw-bold">{{ $other->title }}</span>
                                <small class="text-muted mt-1">
                                    {{ $other->created_at ? $other->created_at->diffForHumans() : 'No date available' }}
                                </small>
                            </div>
                        </a>
                    @endforeach
                </div>
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
