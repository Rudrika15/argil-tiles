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
