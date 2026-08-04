@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Explore blog articles written by our expert authors on quartz surfaces, SPC flooring, and tile design trends.">

    <meta property="og:title" content="Blog Authors | Argil Tiles">
    <meta property="og:description"
        content="Read articles from Argil Tiles authors and discover expert insights on tiles, quartz surfaces, and flooring solutions.">
    <meta property="og:url" content="https://argiltiles.com/authors/{{ isset($author) && $author ? Str::slug($author) : '' }}">

    <meta name="twitter:title" content="Blog Authors | Argil Tiles">
    <meta name="twitter:description"
        content="Explore blogs written by Argil Tiles authors and industry experts.">

    <link rel="canonical" href="https://argiltiles.com/authors/{{ isset($author) && $author ? Str::slug($author) : '' }}">

    <title>
        {{ isset($author) && $author ? $author . ' Blogs | Argil Tiles' : 'Blog Authors | Argil Tiles' }}
    </title>
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">
            <div class="p-2">
                <h1 class="display-6 fw-bold">
                    Blogs
                    {{-- @if(isset($author) && $author)
                        {{ $author }}
                    @else
                        Blog Authors
                    @endif --}}
                </h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <div class="container">

        {{-- <div class="text-center my-4">
            <h2 class="fw-bold">
                @if(isset($author) && $author)
                    Blogs by {{ $author }}
                @else
                    All Author Blogs
                @endif
            </h2>
        </div> --}}

       <div class="row g-3 mb-4">
    @forelse ($blogs as $blog)

        <div class="col-lg-4 col-md-6 col-12">

            <a href="{{ route('blogdetails', $blog->slug) }}"
               class="text-decoration-none text-dark d-block h-100">

                <div class="card blog-card h-100 border-0 shadow-sm">

                    <img src="{{ asset('blogimage/' . $blog->image) }}"
                        alt="{{ $blog->title }}"
                        title="{{ $blog->title }}"
                        @if ($loop->iteration <= 2) loading="eager" fetchpriority="{{ $loop->first ? 'high' : 'auto' }}" decoding="async" @else loading="lazy" @endif
                        class="card-img-top blog-card-image">

                    <div class="card-body">

                        <h2 class="card-title fw-bold">
                            {{ $blog->title }}
                        </h2>

                        <p class="text-muted small mb-1">
                            By {{ $blog->author }}
                        </p>

                        <p class="text-muted small mb-2">
                           {{ $blog->created_at ? $blog->created_at->format('d M Y') : '' }}
                        </p>

                        <p class="card-text">
                            {!! Str::limit(strip_tags($blog->description), 120, '...') !!}
                        </p>
                        <div class="long-arrow d-flex align-items-center justify-content-between mt-auto pt-3">
    <span class="small fw-bold text-uppercase" style="letter-spacing:1px;">
        More Details
    </span>

    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16"
        fill="currentColor" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
    </svg>
</div>

                    </div>

                </div>

            </a>

        </div>

    @empty

        <div class="col-12 text-center">
            <p>No blogs found.</p>
        </div>

    @endforelse
</div>
    </div>
@endsection