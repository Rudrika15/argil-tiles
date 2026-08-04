@extends('layouts.app')

@section('seosection')
@php
    $cmsTitle = \App\Support\SeoCopy::soften($page->meta_title ?? ($page->title . ' | Surfaces'));
    $cmsDescription = \App\Support\SeoCopy::soften(Str::limit(
        trim($page->meta_description ?: strip_tags($page->description)),
        155,
        ''
    ));
    $cmsKeywords = \App\Support\SeoCopy::soften($page->meta_keyword ?? 'engineered surfaces, rigid-core vinyl, Morbi manufacturer');
@endphp

    <meta name="description"
        content="{{ $cmsDescription }}">

    <meta name="keywords"
        content="{{ $cmsKeywords }}">

    <meta property="og:title"
        content="{{ $cmsTitle }}">

    <meta property="og:description"
        content="{{ $cmsDescription }}">

    <meta property="og:url"
        content="https://argiltiles.com/{{ $page->slug }}">

    <meta property="og:type" content="website">

    <meta property="og:site_name" content="Mod Ceramic Industries">

    <meta property="og:image"
        content="{{ $page->og_image ? asset('storage/' . $page->og_image) : asset('assets/images/og-image.jpg') }}">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title"
        content="{{ $cmsTitle }}">

    <meta name="twitter:description"
        content="{{ $cmsDescription }}">

    <meta name="twitter:image"
        content="{{ $page->og_image ? asset('storage/' . $page->og_image) : asset('assets/images/og-image.jpg') }}">

    <link rel="canonical"
        href="https://argiltiles.com/{{ $page->slug }}">

    <title>{{ $cmsTitle }}</title>
@endsection

@section('content')

<!-- Breadcrumb -->
<section class="hero-section">
    <div class="overlay">
        <div class="container text-center text-white">
            <span class="top">SURFACE SOLUTIONS</span>
            <h1 class="title">{{ \App\Support\SeoCopy::soften($page->title) }}</h1>
            <div class="hero-divider"></div>
            <p class="lead">Premium Surface Solutions for Modern Living</p>
        </div>
    </div>
</section>
{{-- 
<!-- Content -->
<div class="container py-5">

    <div class="row">
 
        <div class="col-md-12  ">

          @if($page->og_image && file_exists(public_path($page->og_image)))
   <center> <img src="{{ asset($page->og_image) }}"
         alt="{{ $page->title }}"
         class="img-fluid mb-4 " width="50%" height="50%" ></center>
@endif

           
            {!!  html_entity_decode($page->description) !!}

        </div>

    </div>

</div>

            
        </div>
    </div>
</div> 
<div class="col-md-12 text-center justify-content-center py-5">
    
    <h3 class="mb-3">Explore Our Premium Product Collection</h3>

    <p class="text-muted mb-4" style="max-width: 700px; margin: 0 auto;">
        Discover high-quality solutions designed to meet the needs of residential,
        commercial, and industrial projects. Browse our product range to find the
        perfect combination of durability, performance, and aesthetic appeal.
    </p>

    <a href="https://argiltiles.com/quartzsurface" class="btn btn-primary btn-lg px-4">
        Explore Products
    </a>

</div> --}}
@if($page->og_image && file_exists(public_path($page->og_image)))
<section class="featured-image-section">
    <div class="container">
        <div class="featured-image-card">
            <img src="{{ asset($page->og_image) }}"
                 alt="{{ \App\Support\SeoCopy::soften($page->title) }}"
                 title="{{ \App\Support\SeoCopy::soften($page->title) }}">
        </div>
    </div>
</section>
@endif
<div class="article-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <div class="blog-content">
                    {!! \App\Support\SeoCopy::soften(str_replace('<br>', '', html_entity_decode($page->description))) !!}
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-5">
    @if($productUrl)
    <div class="explore mx-auto">

        <div class="author-info text-center">
            <span>DISCOVER MORE</span>

            <h2>Explore Our Premium Product Collection</h2>

            <p>
                Discover high-quality solutions designed to meet the needs of
                residential, commercial, and industrial projects. Browse our
                product range to find the perfect combination of durability,
                performance, and aesthetic appeal.
            </p>

            <a href="{{ $productUrl }}" class="btn btn-primary btn-lg mt-4 px-4">
                Explore Products
            </a>
        </div>

    </div>
    @endif
</div>

@endsection