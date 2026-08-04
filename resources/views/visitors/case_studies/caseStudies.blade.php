@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore case studies featuring engineered stone and rigid-core vinyl installations across residential, commercial, retail, and hospitality projects.">

    <meta name="keywords"
        content="case studies, engineered stone projects, rigid-core vinyl projects, commercial installations">

    <meta property="og:title" content="Case Studies | Engineered Surfaces & Vinyl Projects">
    <meta property="og:description"
        content="Discover real-world engineered stone and rigid-core vinyl projects. Browse our portfolio of residential and commercial installations.">
    <meta property="og:url" content="https://argiltiles.com/case-studies">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Mod Ceramic Industries">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Case Studies | Engineered Surfaces & Vinyl Projects">
    <meta name="twitter:description"
        content="Browse successful engineered stone and rigid-core vinyl installations for homes, retail, offices, hotels, and commercial spaces.">

    <link rel="canonical" href="https://argiltiles.com/case-studies">

    <title>Case Studies | Engineered Surfaces & Vinyl Projects</title>
@endsection
@section('lcp_preload')
    @if(isset($caseStudies) && $caseStudies->count() && $caseStudies->first()->featured_image)
        <link rel="preload" as="image" href="{{ asset('featured-image/' . $caseStudies->first()->featured_image) }}" fetchpriority="high">
    @endif
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Case Studies</h1>
        </div>
    </div>

    <div class="container py-5">
    <div class="row mb-4">
        <div class="col-lg-10 mx-auto text-center">
            <p class="lead mb-2">
                Real projects featuring our engineered stone and rigid-core vinyl in homes and commercial spaces.
            </p>
            <p class="text-muted mb-3">
                Explore how architects and builders specify our materials for kitchens, platforms, and durable floors.
                Each case study covers the design challenge, product choice, and finished result.
            </p>
            <p class="text-muted mb-0">
                Browse residential renovations, hotel vanities, retail interiors, and other installations completed with
                surfaces manufactured in Morbi. Use these stories to compare applications, then contact our team when you
                need similar specifications, samples, or export support for your next project. Each write-up highlights
                site conditions, product selection criteria, and outcomes that architects and owners care about—durability,
                visual consistency, and installation practicality. Filter by project type as you browse, and open a detail
                page for galleries plus challenge–solution–result notes from the site team. Prefer a shortlist by product
                type? Tell us whether you need engineered stone, rigid-core vinyl, or both when you enquire. Fresh projects
                are published as they are documented and approved for sharing.                 Check back often for newly added stories from residential and commercial sites across India and abroad today.
            </p>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-lg-10 mx-auto text-center">
            <h2 class="h5 fw-bold">What you will learn</h2>
            <p class="text-muted mb-0">
                Each case study summarises the brief, material choice, and finished result so you can compare kitchens,
                hotels, and retail interiors before requesting samples. Use them alongside our catalogues when presenting
                options to clients or preparing tender boards for commercial work.
            </p>
        </div>
    </div>
    <div class="row g-4">

        @forelse($caseStudies as $caseStudy)
            <div class="col-lg-4 col-md-6 mb-4">
    <div class="blog-card h-100 bg-white shadow-sm border-0 rounded overflow-hidden">

        <a href="{{ route('visitors.case_studies.caseStudiesDetail', $caseStudy->slug) }}"
            class="text-decoration-none text-dark d-block h-100">

            @if($caseStudy->featured_image)
                <div class="blog-card-img-wrapper">
                    <img src="{{ asset('featured-image/' . $caseStudy->featured_image) }}"
                         alt="{{ \App\Support\SeoCopy::soften($caseStudy->title) }}"
                         title="{{ \App\Support\SeoCopy::soften($caseStudy->title) }}"
                         class="blog-card-image"
                         @if ($loop->iteration <= 2) loading="eager" fetchpriority="{{ $loop->first ? 'high' : 'auto' }}" decoding="async" @else loading="lazy" @endif>
                </div>
            @endif

            <div class="p-4 d-flex flex-column h-100">
                <h3 class="h5 fw-bold mb-3">
                    {{ \App\Support\SeoCopy::soften($caseStudy->title) }}
                </h3>

                <p class="text-muted mb-4">
                    {{ \App\Support\SeoCopy::soften(\Illuminate\Support\Str::limit(strip_tags($caseStudy->short_description), 200)) }}
                </p>

                <div class="read-more">
    <span class="fw-semibold long-arrow">
        Read Case Study
        <span class="long-arrow ms-1">&rarr;</span>
    </span>
</div>
            </div>

        </a>

    </div>
</div>
        @empty
            <div class="col-12 text-center">
                <p>No Case Studies Found</p>
            </div>
        @endforelse

    </div>

    <div class="pagination-wrapper">
        {{ $caseStudies->links() }}
    </div>
</div>
@endsection
