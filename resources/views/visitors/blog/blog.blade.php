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
 
    
<style>
    /* .blog-card-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
} */

 .blog-card-image {
    width: 100%;
    height: 250px;
    object-fit: fill;
}

.blog-card {
    transition: transform 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
}
.blog-card .long-arrow {
    color: #ccb19b;
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.4s ease-in-out;
}

.blog-card:hover .long-arrow {
    opacity: 1;
    transform: translateX(0);
}

/* Pagination */
.pagination-wrapper{
    display:flex;
    justify-content:center;
    margin-top:50px;
}

.pagination{
    display:flex;
    align-items:center;
    gap:10px;
    flex-wrap:wrap;
}

.pagination .page-item{
    list-style:none;
}

.pagination .page-link{
    min-width:45px;
    height:45px;
    display:flex;
    align-items:center;
    justify-content:center;
    border:none;
    border-radius:50%;
    background:#f5f5f5;
    color:#333;
    font-weight:600;
    transition:.3s;
}

.pagination .page-link:hover{
    background:#ccb19b;
    color:#fff;
}

.pagination .page-item.active .page-link{
    background:#ccb19b;
    color:#fff;
    box-shadow:0 5px 15px rgba(204,177,155,.35);
}

.pagination .page-item.disabled .page-link{
    opacity:.5;
}

.pagination svg{
    width:16px;
    height:16px;
}
</style>

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

    {{-- <div class="container">
        <div class="row mb-4">
            @foreach ($blogs as $index => $blog)
                <div class="col-md-6">
                    <h2 class="mt-4 fw-bold">{{ $blog->title }}</h2>
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="argil blog" title="argil blog" loading="lazy"
                        class="img-fluid w-100 mt-3">
                    <p class="py-3">
                        {{ $blog->created_at ? $blog->created_at->diffForHumans() : 'No date available' }}
                    </p>

                    <p class="text-justify mt-4 " style="font-size:12pt">{!! Str::limit($blog->description, 120, '...') !!}</p>
                    <a href="{{ route('blogdetails', $blog->slug) }}" class="btn btn-primary mt-3">
                        Read More
                    </a>
                </div>
            @endforeach
        </div> <!-- Close current row -->
    </div> --}}
    <div class="container">
    <div class="row g-4 mb-4">

        @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-12">

                <a href="{{ route('blogdetails', $blog->slug) }}"
                   class="text-decoration-none text-dark d-block h-100">

                    <div class="card blog-card h-100 border-0 shadow-sm">

                        <img src="{{ asset('blogimage/' . $blog->image) }}"
                             alt="argil blog "
                             title="argil blog"
                             loading="lazy"
                             class="card-img-top blog-card-image"
                             >

                        <div class="card-body">

                            <h5 class="card-title fw-bold">
                                {{ $blog->title }}
                            </h5>

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
