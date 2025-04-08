@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>SPC</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>SPC Products</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h2 class="container">Home/SPC Products</h2>
    </div> --}}


    <div class="text-center products-heading">
        <p>SPC Flooring Tiles</p>
    </div>

    <div class="container spcprodcuts">
        <div class="row">
            @foreach ($data as $index => $data)
                <div class="col-md-4 col-md-6">
                    <a href="{{ Route('spcproductinquiry', $data->id) }}">
                        <div class="card1" data-aos="flip-left">
                            <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" class="img-responsive">
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
