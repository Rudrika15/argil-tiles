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
<style>
    
.author-badge{
    background-color: #ccb19b;
    color: #fff;
    border: 1px solid #c49a6c;
    transition: all 0.3s ease;
    font-size: 0.9rem;
    
}

.author-badge:hover{
    background-color: #b3895f; /* slightly darker */
    color: #fff;
    border-color: #b3895f;
}
</style>
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold text-center"> {{ $blog->title }}</h1>
        
            </div>
            
<div class="text-center mt-3">

    <div class="mb-2">
    <a href="{{ url('/authors/' . Str::slug($blog->author)) }}"
        class="badge author-badge px-3 py-2 mb-2 text-decoration-none">
        Written By {{ $blog->author }}
    </a>
</div>

    <div class="text-light small">
        <i class="fa fa-calendar-alt me-1"></i>
       Published on {{ $blog->updated_at->format('d M Y') }}
    </div>

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
                        <p class="text-justify">{!! $blog->description !!}</p>
                   
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
    {{-- <div class="text-center mt-2">
    <a href="{{ url('/authors/' . Str::slug($blog->author)) }}"
       class="btn btn-sm btn-outline-primary">
       Published By {{ $blog->author }}
    </a>

    <span class="ms-3">
        <i class="fa fa-calendar"></i>
        {{ $blog->updated_at->format('d M Y') }}
    </span>
</div> --}}

@endsection
