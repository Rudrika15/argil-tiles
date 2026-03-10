@extends('layouts.app')
@section('seosection')
    <style>
        .blog-img{
    height:250px;
    object-fit:cover;
}
    </style>
    <meta name="description"
        content="Discover the latest tile trends, design ideas, and product updates from Argil Tiles. Explore our blogs for inspiration and expert tips.">
    <meta name="keywords"
        content="tiles, tile design, flooring, Argil Tiles blog, home renovation, ceramic tiles, tile ideas">
    <meta property="og:title" content="Argil Tiles Blog | Tile Design Trends, Tips & Inspirations">
    <meta property="og:description"
        content="Explore expert tips, tile trends, and design inspiration from the official Argil Tiles blog. Stay updated with the latest in ceramic and flooring solutions.">
    <meta property="og:url" content="https://argiltiles.com/blogs">
    <meta name="twitter:title" content="Argil Tiles Blog | Tile Design Trends, Tips & Inspirations">
    <meta name="twitter:description"
        content="Explore expert tips, tile trends, and design inspiration from the official Argil Tiles blog. Stay updated with the latest in ceramic and flooring solutions.">
    <link rel="canonical" href="https://argiltiles.com/blogs" data-react- helmet="true">
    <title>Argil Tiles Blog | Tile Design Trends, Tips & Inspirations
    </title>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Blog</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <div class="container">
    <div class="row g-4">
        @foreach ($blogs as $blog)

        <div class="col-md-6">
            <div class="card h-100">

                <img src="{{ asset('blogimage/' . $blog->image) }}"
                     class="card-img-top blog-img"
                     alt="{{ $blog->title }}"
                     title="{{ $blog->title }}"
                     loading="lazy">

                <div class="card-body d-flex flex-column">

                    <h5 class="fw-bold">{{ $blog->title }}</h5>

                    <p class="text-muted">
                        {{ $blog->created_at ? $blog->created_at->diffForHumans() : 'No date available' }}
                    </p>

                    <p>
                        {{ Str::limit(strip_tags($blog->description), 120, '...') }}
                    </p>

                    <a href="{{ route('blogdetails', $blog->slug) }}" class="btn btn-primary mt-auto">
                        Read More
                    </a>

                </div>

            </div>
        </div>

        @endforeach
    </div>
</div>




@endsection
