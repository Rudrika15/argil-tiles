@extends('layouts.app')

@section('seosection')
@php
    $metaTitle = \App\Support\SeoCopy::soften($blog->ogTitleEng ?: ($blog->title . ' | Surfaces Blog'));
    $metaDescription = \App\Support\SeoCopy::soften($blog->meta_description
        ?: ($blog->ogDescriptionEng
        ?: \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($blog->description))), 160, '')));
    $metaKeywords = \App\Support\SeoCopy::soften($blog->keywords
        ?: ($blog->tages
        ?: 'surface design blog, countertop tips, rigid-core vinyl, tile design'));
    $ogImage = !empty($blog->ogImage)
        ? asset('ogimage/' . $blog->ogImage)
        : asset('blogimage/' . $blog->image);
@endphp
    <title>{{ $metaTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <meta name="keywords" content="{{ $metaKeywords }}">
    <meta property="og:title" content="{{ $metaTitle }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:url" content="https://argiltiles.com/blogdetails/{{ $blog->slug }}">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mod Ceramic Industries">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta name="twitter:title" content="{{ $metaTitle }}">
    <meta name="twitter:description" content="{{ $metaDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">
    <link rel="canonical" href="https://argiltiles.com/blogdetails/{{ $blog->slug }}">
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('blogimage/' . $blog->image) }}" fetchpriority="high">
@endsection
@section('content')

<section class="blog-hero">
    <div class="container text-center">

        <div class="blog-category">
            BLOG /
            <span>{{ $blog->category ?? 'LUXURY INTERIORS' }}</span>
        </div>

        <h1 class="blog-title">
            {{ \App\Support\SeoCopy::soften($blog->title) }}
        </h1>

        <div class="hero-divider"></div>

        <div class="blog-meta">

            <span>
                <i class="fa-regular fa-pen-to-square"></i>
                Written by {{ $blog->author }}
            </span>

            <span>
                <i class="fa-regular fa-calendar"></i>
                Published on {{ $blog->updated_at->format('d M Y') }}
            </span>

            <span>
                <i class="fa-regular fa-clock"></i>
                5 min read
            </span>

        </div>

    </div>
</section>

<section class="featured-image-section">
    <div class="container">

        <div class="featured-image-card">

            <img src="{{ asset('blogimage/'.$blog->image) }}"
                alt="{{ \App\Support\SeoCopy::soften($blog->title) }}"
                title="{{ \App\Support\SeoCopy::soften($blog->title) }}"
                class=" w-100" loading="eager" fetchpriority="high" decoding="async">

        </div>

    </div>
</section>

<section class="article-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-10 text-justify mx-auto">

                <div class="blog-content">
                    {!! \App\Support\SeoCopy::soften($blog->description) !!}
                </div>

                <div class="quote-box">
    <blockquote>
        Sophistication is not about being noticed,
        it's about being remembered.
    </blockquote>

    <span class="quote-author">
        — Design Philosophy
    </span>
</div>

        </div>

        <div class="author-box">

            <div class="author-logo ml-2">

                <img src="{{ asset('assets/asset/logo.png') }}" class="p-3"
                    alt="company logo" title="Home">

            </div>

            <div class="author-info">

                <span>ABOUT THE AUTHOR</span>

                <p>{{ $blog->author }}</p>

                <p>
                    Experts in engineered stone, rigid-core vinyl, and premium tiles.
                    Dedicated to bringing world-class surfaces that inspire timeless living.
                </p>

            </div>

            <div class="author-btn">

                <a href="{{ url('/authors/' . Str::slug($blog->author)) }}"
                    class="btn btn-theme">
                    View all articles â†’
                </a>

            </div>

        </div>

    </div>

</section>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BlogPosting",
    "@@id": "https://argiltiles.com/blogdetails/{{ $blog->slug }}#blogposting",
    "mainEntityOfPage": {
        "@@type": "WebPage",
        "@@id": "https://argiltiles.com/blogdetails/{{ $blog->slug }}"
    },
    "headline": {{ json_encode(\App\Support\SeoCopy::soften($blog->title)) }},
    "description": {{ json_encode(\App\Support\SeoCopy::soften(strip_tags($blog->description))) }},
    "image": {
        "@@type": "ImageObject",
        "url": "{{ asset('blogimage/' . $blog->image) }}"
    },
    "url": "https://argiltiles.com/blogdetails/{{ $blog->slug }}",
    "author": {
        "@@type": "Organization",
        "name": "Mod Ceramic Industries Ltd."
    },
    "publisher": {
        "@@type": "Organization",
        "name": "Mod Ceramic Industries Ltd.",
        "logo": {
            "@@type": "ImageObject",
            "url": "{{ asset('assets/asset/logo.png') }}"
        }
    },
    "datePublished": "{{ \Carbon\Carbon::parse($blog->created_at)->toAtomString() }}",
    "dateModified": "{{ \Carbon\Carbon::parse($blog->updated_at)->toAtomString() }}",
    "articleSection": "Blogs",
    "inLanguage": "en-IN"
}
</script>
@endsection