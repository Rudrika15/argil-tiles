@extends('layouts.app')
@section('seosection')
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / {{ $blog->title }}</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->


    {{-- <div class="container mt-4">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ asset('blogimage/' . $blog->image) }}" alt="Blog Image" class="img-fluid rounded">
                </div>

                <div class="col-md-7">
                    <div class="content">
                        <p class="text-justify">{!! nl2br(e($blog->description)) !!}</p>
                    </div>
                </div>
            </div>
        </div> --}}
    @php
        // Split the description into two parts dynamically
        $split_position = 900; // Adjust the split point
        $first_part = substr($blog->description, 0, $split_position);
        $second_part = substr($blog->description, $split_position);
    @endphp

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-md-5 mb-3 mb-md-0">
                <img src="{{ asset('blogimage/' . $blog->image) }}" alt="Blog Image" class="img-fluid rounded w-100">
            </div>

            <!-- First Part of Description (col-md-7) -->
            <div class="col-12 col-md-7">
                <div class="content">
                    <p class="text-justify">{!! nl2br(e($first_part)) !!}</p>
                </div>
            </div>

            <!-- Second Part of Description (col-md-12) -->
            <div class="col-12">
                <div class="content mt-2">
                    <p class="text-justify">{!! nl2br(e($second_part)) !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
