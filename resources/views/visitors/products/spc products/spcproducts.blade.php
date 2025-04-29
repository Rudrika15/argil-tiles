@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="High-quality SPC flooring tiles by Argil.
Durable, waterproof, and stylish SPC flooring solutions from top manufacturers
in Morbi, Gujarat, India." />
    <meta name="keywords"
        content="SPC Flooring Tiles, SPC Tiles, Waterproof
Flooring, Argil Tiles, Flooring Manufacturers, Morbi Gujarat" />
    <meta name="author" content="Argil Group – Innovators in SPC Flooring &
Surface Solutions">
    <meta property="og:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet
="true">
    <meta property="og:url" content="https://argiltiles.com/spcproducts" data- react-helmet="true">
    <meta property="og:description"
        content="Argil is SPC flooring tiles
manufacturers in Morbi, Gujarat, India. We are the best SPC flooring brands
with 10+ yrs of service. Get a price quote "
        data-react-helmet="true">
    <meta name="twitter:title" content="SPC Flooring Tiles Manufacturers In Morbi,
 Gujarat, India | Argil"
        data-react-helmet="true">
    <meta name="twitter:description"
        content="Argil is SPC flooring tiles
manufacturers in Morbi, Gujarat, India. We are the best SPC flooring brands
with 10+ yrs of service. Get a price quote"
        data-react-helmet="true">
    <link rel="canonical" href="https://argiltiles.com/spcproducts" data-react- helmet="true">
    <title>Best SPC Flooring Tiles Manufacturer in Morbi, India | Argil</title>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / SPC Products</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">

        {{-- <div class="container">
            <div class="row pt-3">
                <div class="col-md-6">
                    <h2>hello argil </h2>
                </div>
                <div class="col-md-6">
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quam natus cumque corporis
                        laudantium repellat aut reiciendis assumenda nulla labore molestiae eveniet fugiat eaque suscipit
                        rerum facere qui, ducimus modi?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                        veritatis, perferendis quod commodi cum cumque beatae sunt possimus repellat, nihil ipsa repudiandae
                        dolorem eius aliquam animi voluptatem. Odit, reiciendis? Praesentium.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="spc\spc1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <img src="spc\spc2.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="spc\spc1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="spc\spc2.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <img src="spc\spc2.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div> --}}


        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">SPC Flooring Tiles</h2>

            @foreach ($data as $index => $item)
                <div class="col-md-4 pt-5">
                    <a href="{{ Route('spcproductinquiry', $item->id) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('spc/' . $item->mainImg) }}" class="card-img-top" alt="Tile Image"
                                loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->names }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
