@extends('layouts.app')
@section('seosection')
<meta name="description"
    content="Expert tips on countertops, rigid-core vinyl, and tile design from our team. Read the latest articles.">
<meta name="keywords"
    content="surface design blog, countertop tips, rigid-core vinyl, tile design ideas, interior inspiration">

<meta property="og:title" content="Design Blog | Tile Trends, Tips & Inspiration">
<meta property="og:description"
    content="Explore design inspiration, tile trends, and expert insights. Discover ideas for modern homes and commercial spaces.">
<meta property="og:url" content="https://argiltiles.com/blogs">

<meta name="twitter:title" content="Design Blog | Tile Trends, Tips & Inspiration">
<meta name="twitter:description"
    content="Get the latest tile trends, floor covering ideas, and expert advice. Stay inspired with our newest articles.">

<link rel="canonical" href="https://argiltiles.com/blogs">

<title>Design Blog | Countertops, Vinyl & Tile Tips</title>
@endsection
@section('lcp_preload')
    @if(isset($blogs) && $blogs->count())
        <link rel="preload" as="image" href="{{ asset('blogimage/' . $blogs->first()->image) }}" fetchpriority="high">
    @endif
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Home / Blog</h1>
        </div>
    </div>

    <div class="container">
    <div class="row mb-4 pt-4">
        <div class="col-lg-10 mx-auto text-center">
            <p class="lead mb-2">
                Practical guides on countertops, rigid-core vinyl, and modern surface design from our specialists.
            </p>
            <p class="text-muted mb-3">
                Read articles on material selection, installation tips, care routines, and export-ready product insights
                for Indian and international projects.
            </p>
            <p class="text-muted mb-0">
                Whether you are specifying a kitchen island, comparing waterproof floor options, or planning finishes for
                a commercial lobby, these posts share field-tested advice from our manufacturing and design teams. New
                articles are added regularly—bookmark the page or follow our social channels for updates. Topics often
                include colour psychology for floors, climate-aware material choices, care routines for engineered stone,
                and practical notes for export buyers evaluating Indian surface manufacturers.
            </p>
        </div>
    </div>
    <div class="row g-4 mb-4">

        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">

                <a href="{{ route('blogdetails', $blog->slug) }}"
                   class="text-decoration-none text-dark d-block h-100">

                    <div class="card blog-card h-100 border-0 shadow-sm">

                        <img src="{{ asset('blogimage/' . $blog->image) }}"
                             alt="{{ \App\Support\SeoCopy::soften($blog->title) }}"
                             title="{{ \App\Support\SeoCopy::soften($blog->title) }}"
                             @if ($loop->iteration <= 2) loading="eager" fetchpriority="{{ $loop->first ? 'high' : 'auto' }}" decoding="async" @else loading="lazy" @endif
                             class="card-img-top blog-card-image"
                             >

                        <div class="card-body">

                            <h2 class="card-title fw-bold">
                                {{ \App\Support\SeoCopy::soften($blog->title) }}
                            </h2>

                            <p class="text-muted small mb-2">
                                {{ $blog->created_at ? $blog->created_at->format('d M Y') : '' }}
                            </p>

                            <p class="card-text">
                                {!! \App\Support\SeoCopy::soften(Str::limit(strip_tags($blog->description), 220, '...')) !!}
                            </p>
                           <div class="long-arrow d-flex align-items-center justify-content-between mt-auto pt-3">
    <span class="small fw-bold text-uppercase letter-spacing-1">
        More Details
    </span>
</div>
                            
                        </div>
                         

                    </div>
                </a>
                
            </div>
        @endforeach

    </div>

@if($blogs->hasPages())
    <div class="pagination-wrapper mt-5 mb-5">
        {{  $blogs->links('pagination::bootstrap-5') }}
    </div>
@endif
</div>
    {{--
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <h2>Blog</h2>
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
                <p class="text-justify paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                    <a href="/blogdetails"> <button class="btn-warning"
                    style="padding: 4px 10px;border-radius: 5px; margin-bottom:10px;">ReadMe</button></a>
            </div>
            <div class="col-md-3 col-sm-3" style="margin-top: 53px;" >
                <h2 style="background: black;color:white">POPULAR</h2>
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
            <div class="col-md-3 col-sm-3" style="margin-top: 10px" data-aos="flip-left">

                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
            <div class="col-md-3 col-sm-3" style="margin-top: 10px" data-aos="flip-left">

                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>


        </div>

        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
                <h2>Blog</h2>
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
                <p class="text-justify paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                <button class="btn-warning"
                    style="padding: 4px 10px;border-radius: 5px; margin-bottom:10px;">ReadMe</button>
            </div>
            <div class="col-md-6" data-aos="fade-up">
                <h2>Blog</h2>
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
                <p class="text-justify paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                <button class="btn-warning"
                    style="padding: 4px 10px;border-radius: 5px; margin-bottom:10px;">ReadMe</button>
            </div>

        </div>
    </div> --}}
@endsection
