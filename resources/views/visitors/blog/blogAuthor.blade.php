@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Explore blog articles written by our expert authors on quartz surfaces, SPC flooring, and tile design trends.">

    <meta property="og:title" content="Blog Authors | Argil Tiles">
    <meta property="og:description"
        content="Read articles from Argil Tiles authors and discover expert insights on tiles, quartz surfaces, and flooring solutions.">
    <meta property="og:url" content="{{ url()->current() }}">

    <meta name="twitter:title" content="Blog Authors | Argil Tiles">
    <meta name="twitter:description"
        content="Explore blogs written by Argil Tiles authors and industry experts.">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>
        {{ isset($author) && $author ? $author . ' Blogs | Argil Tiles' : 'Blog Authors | Argil Tiles' }}
    </title>
@endsection
<style>

    .blog-card-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.blog-card {
    transition: all 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
}
</style>

@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">
            <div class="p-2">
                <h1 class="display-6 fw-bold">
                    Home /
                    @if(isset($author) && $author)
                        {{ $author }}
                    @else
                        Blog Authors
                    @endif
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

       <div class="row g-4 mb-4">
    @forelse ($blogs as $blog)

        <div class="col-lg-4 col-md-6 col-12">

            <div class="card blog-card h-100 border-0 shadow-sm">

                <img src="{{ asset('blogimage/' . $blog->image) }}"
                    alt="{{ $blog->title }}"
                    title="{{ $blog->title }}"
                    loading="lazy"
                    class="card-img-top blog-card-image">

                <div class="card-body">

                    <h5 class="fw-bold">
                        {{ $blog->title }}
                    </h5>

                    <p class="text-muted small mb-2">
                        <strong>Author:</strong> {{ $blog->author }}
                    </p>

                    <p class="text-muted small">
                        {{ $blog->created_at ? $blog->created_at->format('d M Y') : '' }}
                    </p>

                    <p>
                        {!! Str::limit(strip_tags($blog->description), 120, '...') !!}
                    </p>

                    <a href="{{ route('blogdetails', $blog->slug) }}"
                        class="btn btn-primary">
                        Read More
                    </a>

                </div>

            </div>

        </div>

    @empty

        <div class="col-12 text-center">
            <h4>No blogs found.</h4>
        </div>

    @endforelse
</div>
    </div>
@endsection