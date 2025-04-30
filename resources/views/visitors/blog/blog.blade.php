@extends('layouts.app')
@section('seosection')
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
        <div class="row mb-4">
            @foreach ($blogs as $index => $blog)
                <div class="col-md-6">
                    <h3 class="mt-4 fw-bold">{{ $blog->title }}</h3>
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="argil blog" title="argil blog" loading="lazy"
                        class="img-fluid w-100 mt-3">
                    <p class="text-justify mt-4">{{ Str::limit($blog->description, 200, '...') }}</p>
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
