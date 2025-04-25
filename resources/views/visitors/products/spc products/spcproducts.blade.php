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
    <link rel="canonical" href="https://argiltiles.com/spcproducts" data-react-
    helmet="true">
    <title>Best SPC Flooring Tiles Manufacturer in Morbi, India | Argil</title>
@endsection
@section('content')
    <!-- page title -->
    <section class="page-title" style="background-image: url('asset/css/assets/bg-img.png');">

        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>SPC</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>SPC Products</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <h1 class="text-info">hello Argil</h1>
            </div>
            <div class="col-md-6">
                <p class="text-danger text-justify paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae voluptate tempora atque odit nemo blanditiis, dolorum culpa sed architecto, placeat harum nostrum vero explicabo aliquam nesciunt fugiat exercitationem asperiores temporibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni dolorum corporis harum doloremque quia beatae tempora assumenda minima ipsum! Recusandae, laborum architecto? Dolorem nobis laudantium quasi dolorum? Tenetur, quia voluptatibus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
            <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
            <div class="col-md-6 col-sm-6">
                <img src="spc/spc2.jpg" alt="" class="img-responsive spc-image1">
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
            <div class="col-md-4 col-sm-4">
                <img src="spc/spc1.jpg" alt="" class="img-responsive spc-image1">
            </div>
        </div>
    </div>
    <div class="text-center products-heading">
        <p>SPC Flooring Tiles</p>
    </div>

    <div class="container spcprodcuts">
        <div class="row">
            @foreach ($data as $index => $data)
                <div class="col-md-4 col-sm-4">
                    <a href="{{ Route('spcproductinquiry', $data->id) }}">
                        <div class="card1" data-aos="flip-left">
                            <img src="{{ asset('spc/' . $data->mainImg) }}" alt="spc product" title="spc prodcut" class="img-responsive">
                            <p class="text-center">{{ $data->names }}</p>
                        </div>
                    </a>
                </div>
                @if (($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div>
@endsection
