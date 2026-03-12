@extends('layouts.app')

@section('seosection')

<meta name="description"
content="{{ $export->metaDescription ?? 'Explore Argil Tiles export products and global tile supply solutions.' }}">

<meta name="keywords"
content="{{ $export->metaKeywords ?? 'tile exporter india, ceramic tiles export, vitrified tiles exporter' }}">

<meta property="og:title"
content="{{ $export->ogTitle ?? $export->title }}">

<meta property="og:description"
content="{{ $export->ogDescription ?? $export->metaDescription }}">

<meta property="og:url"
content="{{ route('exportdetails',$export->slug) }}">

@if($export->ogImage)
<meta property="og:image" content="{{ asset('exportimage/'.$export->ogImage) }}">
@endif

<meta name="twitter:title"
content="{{ $export->ogTitle ?? $export->title }}">

<meta name="twitter:description"
content="{{ $export->ogDescription ?? $export->metaDescription }}">

<link rel="canonical" href="{{ url()->current() }}">

<title>{{ $export->metaTitle ?? $export->title }}</title>

@endsection


@section('content')

<!-- breadcrumb -->
<div class="breadcrumb d-flex justify-content-between align-items-center">
<div class="container">

<div class="p-2">
<h1 class="display-6 fw-bold text-center">{{ $export->title }}</h1>
</div>

</div>
</div>
<!-- breadcrumb -->


<div class="container mt-4">

<div class="row">

<div class="col-md-8 offset-md-2">

@if($export->ogImage)

<img
src="{{ asset('exportimage/'.$export->ogImage) }}"
alt="{{ $export->title }}"
title="{{ $export->title }}"
loading="lazy"
class="img-fluid rounded w-100">

@endif

</div>

</div>


<div class="row mt-4">

<div class="col-md-8 offset-md-2">

{!! html_entity_decode($export->details) !!}

</div>

</div>

</div>

@endsection