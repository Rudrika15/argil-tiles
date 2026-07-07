@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Expert tips on quartz countertops, SPC flooring & tile design from Argil's team. Read the latest articles.">

    <meta property="og:title" content="Argil Tiles Blog | Tile Design Trends, Tips & Inspirations">
    <meta property="og:description"
        content="Explore design inspiration, tile trends, and expert insights from Argil Tiles. Discover ideas for modern homes and commercial spaces.">
    <meta property="og:url" content="https://argiltiles.com/blogs">

    <meta name="twitter:title" content="Argil Tiles Blog | Tile Design Trends, Tips & Inspirations">
    <meta name="twitter:description"
        content="Get the latest tile trends, flooring ideas, and expert advice from Argil Tiles. Stay inspired with our newest blog articles.">

    <link rel="canonical" href="https://argiltiles.com/blogs">

    <title>Argil Tiles Blog | Quartz, SPC Flooring & Tile Design Tips</title>
    
@endsection

<style>
    /* =========================
       CASE STUDIES CARDS
    ========================= */

    .blog-card {
        border: 0;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .blog-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
    }

    .blog-card-img-wrapper {
        overflow: hidden;
    }

    .blog-card-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .blog-card:hover .blog-card-image {
        transform: scale(1.05);
    }

    .blog-card h3 {
        line-height: 1.4;
    }

    .blog-card p {
        line-height: 1.7;
    }

    .read-more {
    opacity: 0;
    transform: translateY(10px);
    transition: all 0.3s ease;
}

.blog-card:hover .read-more {
    opacity: 1;
    transform: translateY(0);
}

.long-arrow {
    display: inline-block;
     color: #ccb19b;
    transition: transform 0.3s ease;
}

.blog-card:hover .long-arrow {
    transform: translateX(8px);
}

    /* =========================
       PAGINATION
    ========================= */

    .pagination-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 50px;
    }

    .pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .pagination .page-item {
        list-style: none;
    }

    .pagination .page-link {
        min-width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 50%;
        background: #f5f5f5;
        color: #333;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .pagination .page-link:hover {
        background: #ccb19b;
        color: #fff;
    }

    .pagination .page-item.active .page-link {
        background: #ccb19b;
        color: #fff;
        box-shadow: 0 5px 15px rgba(204, 177, 155, 0.35);
    }

    .pagination .page-item.disabled .page-link {
        opacity: 0.5;
        pointer-events: none;
    }

    .pagination svg {
        width: 16px;
        height: 16px;
    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 768px) {
        .blog-card-image {
            height: 220px;
        }

        .pagination .page-link {
            min-width: 40px;
            height: 40px;
        }
    }
</style>
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Case Studies</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <div class="container py-5">
    <div class="row g-4">

        @forelse($caseStudies as $caseStudy)
            <div class="col-lg-4 col-md-6 mb-4">
    <div class="blog-card h-100 bg-white shadow-sm border-0 rounded overflow-hidden">

        <a href="{{ route('visitors.case_studies.caseStudiesDetail', $caseStudy->slug) }}"
            class="text-decoration-none text-dark d-block h-100">

            @if($caseStudy->featured_image)
                <div class="blog-card-img-wrapper">
                    <img src="{{ asset('featured-image/' . $caseStudy->featured_image) }}"
                         alt="{{ $caseStudy->title }}"
                         class="blog-card-image w-100">
                </div>
            @endif

            <div class="p-4 d-flex flex-column h-100">
                <h3 class="h5 fw-bold mb-3">
                    {{ $caseStudy->title }}
                </h3>

                <p class="text-muted mb-4">
                    {{ \Illuminate\Support\Str::limit(strip_tags($caseStudy->short_description), 120) }}
                </p>

                <div class="read-more">
    <span class="fw-semibold long-arrow">
        Read Case Study
        <span class="long-arrow ms-1">→</span>
    </span>
</div>
            </div>

        </a>

    </div>
</div>
        @empty
            <div class="col-12 text-center">
                <h4>No Case Studies Found</h4>
            </div>
        @endforelse

    </div>

    <div class="pagination-wrapper">
        {{ $caseStudies->links() }}
    </div>
</div>
@endsection
