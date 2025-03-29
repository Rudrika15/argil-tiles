@extends('layouts.app')
@section('content')
    <div class="heading-title container-fluid">
        <h3 class="container">Home/SPC Products</h3>
    </div>


    <div class="text-center products-heading">
        <h2>SPC Flooring Tiles</h2>
    </div>

    <div class="container spcprodcuts">
        <div class="row">
            @foreach ($data as $index => $data)
                <div class="col-lg-4 col-md-6" >
                    <a href="{{ Route('spcproductinquiry',$data->id) }}">
                        <div class="card1" data-aos="flip-left">
                            <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" width="100%">
                            <h5>{{ $data->names }}</h5>
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
