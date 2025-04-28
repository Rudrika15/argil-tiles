@extends('layouts.app')
@section('seosection')
@endsection
@section('content')
    <!-- page title -->
    <section class="page-title" style="background-image: url('asset/css/assets/bg-img.png');">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Blog</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Blog</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            @foreach ($blogs as $index => $blog)
                <div class="col-md-6" style="margin-bottom: 20px;">
                    <h2>{{ $blog->title }}</h2>
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="" class="img-responsive spc-image1">
                    <p class="text-justify paragraph">{{ $blog->description }}</p>
                    <a href="/blogdetails">
                        <button class="btn btn-warning"
                            style="padding: 4px 10px; border-radius: 5px; margin-bottom:10px;">Read Me</button>
                    </a>
                </div>

                @if (($index + 1) % 2 == 0 && !$loop->last)
        </div> <!-- Close current row -->
        <div class="row"> <!-- Start new row -->
            @endif
            @endforeach
        </div> <!-- Close last row -->
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
