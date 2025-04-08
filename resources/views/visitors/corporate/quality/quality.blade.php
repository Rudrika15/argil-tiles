@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Quality</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Quality</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h2 class="container">Home/Quality</h2>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="paragraph text-justify">In the past 65 odd years of working in semi professional and
                    professional environment, we have observed that quality is not limited to products, but to all
                    activities that we do. From smallest of the tasks like keying in an invoice data to closing the biggest
                    deal, quality is required at every stage and at all levels. We have some quality and standard
                    certificates.</p>
            </div>
        </div>
    </div>
    <div class="container quality-image">
        <div class="row">
            <div class="col-md-4">
                <img src="asset/images/argileimage/qualityimage1.jpeg" alt="" class="img-responsive">
                <p class="quality-image-title1">ISO CERTIFIED</p>
            </div>
            <div class="col-md-4">
                <img src="asset/images/argileimage/qualityimage2.jpeg" alt="" class="img-responsive">
                <p class="quality-image-title1">TISI THAILAND STANDARD
                </p>
            </div>
            <div class="col-md-4">
                <img src="asset/images/argileimage/qualityimage3.jpeg" alt="" class="img-responsive">
                <p class="quality-image-title1">SLSI SRILANKAN STANDARD
                </p>
            </div>
        </div>
    </div>
@endsection
