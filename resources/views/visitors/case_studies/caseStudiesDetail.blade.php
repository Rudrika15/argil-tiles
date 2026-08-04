@extends('layouts.app')
@section('seosection')
@php
    $csTitle = \App\Support\SeoCopy::soften($caseStudies->seo_title ?? ($caseStudies->title . ' | Case Study'));
    $csDescription = \App\Support\SeoCopy::soften($caseStudies->seo_description ?? $caseStudies->short_description);
    $csKeywords = \App\Support\SeoCopy::soften($caseStudies->seo_keywords ?? 'case study, engineered surfaces, project installation');
@endphp
   <meta name="description"
        content="{{ $csDescription }}">

    <meta name="keywords"
        content="{{ $csKeywords }}">

    <meta property="og:title"
        content="{{ $csTitle }}">

    <meta property="og:description"
        content="{{ $csDescription }}">

    <meta property="og:url" content="https://argiltiles.com/case-details/{{ $caseStudies->slug }}">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="Mod Ceramic Industries">

    <meta property="og:image"
        content="{{ asset('storage/' . $caseStudies->featured_image) }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
        content="{{ $csTitle }}">

    <meta name="twitter:description"
        content="{{ $csDescription }}">

    <meta name="twitter:image"
        content="{{ asset('storage/' . $caseStudies->featured_image) }}">

    <link rel="canonical" href="https://argiltiles.com/case-details/{{ $caseStudies->slug }}">

    <title>{{ $csTitle }}</title>
@endsection
@section('lcp_preload')
    @if(!empty($caseStudies->featured_image))
        <link rel="preload" as="image" href="{{ asset('featured-image/' . $caseStudies->featured_image) }}" fetchpriority="high">
    @endif
@endsection

@section('content')

{{-- ================= FULLSCREEN HERO IMAGE ================= --}}


<section class="blog-hero">
    <div class="container text-center">

        <div class="blog-category">
            Case Study Details
        </div>

        <h1 class="blog-title">
            {{ \App\Support\SeoCopy::soften($caseStudies->title) }}
        </h1>

        <div class="hero-divider"></div>
        

        {{-- <div class="blog-meta">
            <span>
                <i class="fa-regular fa-calendar"></i>
                Published on {{ $caseStudies->updated_at->format('d M Y') }}
            </span>

        </div> --}}

    </div>
</section>
<section class="featured-image-section">
    <div class="container">

        <div class="featured-image-card text-light">

            <img src="{{ asset('featured-image/'.$caseStudies->featured_image) }}"
                alt="{{ \App\Support\SeoCopy::soften($caseStudies->title) }} "
                title="{{ \App\Support\SeoCopy::soften($caseStudies->title) }}"
                class="img-fluid w-100" loading="eager" fetchpriority="high" decoding="async">

        </div>

    </div>
</section>


{{-- ================= PROJECT DETAILS ================= --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-3">
                <p class="text-muted">Location</p>
                <p class="fw-semibold">{{ $caseStudies->location }}</p>
            </div>

            <div class="col-md-3">
                <p class="text-muted">Client</p>
                <p class="fw-semibold">{{ $caseStudies->client_name }}</p>
            </div>

            <div class="col-md-3">
                <p class="text-muted">Type</p>
                <p class="fw-semibold">{{ $caseStudies->project_type }}</p>
            </div>

            <div class="col-md-3">
                <p class="text-muted">Completed</p>
                <p class="fw-semibold">
                    {{ $caseStudies->completion_date->format('d M Y') }}
                </p>
            </div>

        </div>
    </div>
</section>


{{-- ================= IMAGE GALLERY ================= --}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Image Gallery</h2>
            <p class="text-muted">Explore our project gallery</p>
        </div>

        @php
            $gallery = is_string($caseStudies->gallery)
                ? json_decode($caseStudies->gallery, true)
                : $caseStudies->gallery;
        @endphp

        <div class="row g-4">

            @if(!empty($gallery))
                @foreach($gallery as $image)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="card border-0 shadow-sm h-100 gallery-card">
                            <img src="{{ asset('gallery-image/' . $image) }}"
                                 class="card-img-top gallery-img"
                                 alt="Gallery Image">
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-muted">No gallery images found.</p>
                </div>
            @endif

        </div>

    </div>
</section>


{{-- ================= PROJECT STORY ================= --}}
<section class="py-5">
    <div class="container">

        <h2 class="mb-4">Project Story</h2>

        <div class="mb-4">
            <h3>Overview</h3>
            {!!  html_entity_decode($caseStudies->overview) !!}
        </div>

        <div class="story-block mb-4">
            <h3>Challenge</h3>
            {!!  \App\Support\SeoCopy::soften(html_entity_decode($caseStudies->challenge)) !!}
        </div>

        <div class="story-block mb-4 ul">
            <h3>Solution</h3>
            {!!  \App\Support\SeoCopy::soften(html_entity_decode($caseStudies->solution)) !!}
            
        </div>

        <div class="story-block mb-4">
            <h3>Result</h3>
            {!!  html_entity_decode($caseStudies->result )!!}
        </div>

    </div>
    <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4 story-block">
            <p class="card-title">{{ $caseStudies->products_used }}</p>
           
        </div> 
    </div>
</section>
{{-- <section>
     <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4 story-block">
            <p class="card-title">{{ $caseStudies->products_used }}</p>
           
        </div> 
    </div>
</section> --}}


{{-- ================= PRODUCTS USED ================= --}}
{{-- <section class="py-5 bg-light">
    <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4">
            @foreach($caseStudies->products as $product)
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <p class="card-title">{{ $product->name }}</p>
                            <p class="text-muted small">{{ $product->short_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
</section> --}}


{{-- ================= MORE PROJECTS ================= --}}
{{-- <section class="py-5">
    <div class="container">

        <h2 class="mb-4">More Projects</h2>

        <div class="row g-4">
            @foreach($moreCaseStudies as $project)
                <div class="col-md-4">
                    <a href="{{ route('case-studies.show', $project->slug) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset($project->thumbnail) }}" class="card-img-top" alt="{{ $project->title }}">
                            <div class="card-body">
                                <h3 class="card-title">{{ $project->title }}</h3>
                                <p class="text-muted small">{{ $project->location }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section> --}}

@endsection