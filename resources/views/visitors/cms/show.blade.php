@extends('layouts.app')

@section('seosection')

<title>{{ $page->meta_title ?: $page->title }}</title>

<meta name="description"
    content="{{ $page->meta_description }}">

<meta name="keywords"
    content="{{ $page->meta_keyword }}">

<meta name="author"
    content="{{ $page->author }}">

<meta property="og:title"
    content="{{ $page->meta_title ?: $page->title }}">

<meta property="og:description"
    content="{{ $page->meta_description }}">

<meta property="og:url"
    content="{{ url()->current() }}">

@if($page->og_image)
<meta property="og:image"
    content="{{ asset($page->og_image) }}">
@endif

<link rel="canonical"
    href="{{ url()->current() }}">

@endsection


@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb d-flex justify-content-between align-items-center">
    <div class="container">
        <div class="p-2">
            <h1 class="display-6 fw-bold">
                {{ $page->title }}
            </h1>
        </div>
    </div>
</div>

<!-- Content -->
<div class="container py-5">

    <div class="row">

        <div class="col-md-12">

            @if($page->og_image)
                <img src="{{ asset($page->og_image) }}"
                     alt="{{ $page->title }}"
                     class="img-fluid mb-4">
            @endif

            {!! $page->description !!}

        </div>

    </div>

</div>

@endsection