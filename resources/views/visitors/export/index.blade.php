@extends('layouts.app')

@section('seosection')

<style>
.export-img{
height:250px;
object-fit:cover;
}
</style>

<meta name="description"
content="Explore Argil Tiles export products and international supply capabilities. Discover our tile export services worldwide.">

<meta name="keywords"
content="tile export, ceramic tiles exporter, tiles export india, argil tiles export">

<meta property="og:title" content="Argil Tiles Export | Global Tile Exporter">

<meta property="og:description"
content="Discover Argil Tiles global export services and ceramic tile distribution worldwide.">

<meta property="og:url" content="{{ url('/export') }}">

<link rel="canonical" href="{{ url('/export') }}">

<title>Argil Tiles Export | Global Tile Exporter</title>

@endsection


@section('content')

<!-- breadcrumb -->
<div class="breadcrumb d-flex justify-content-between align-items-center">
<div class="container">

<div class="p-2">
<h1 class="display-6 fw-bold">Home / Export</h1>
</div>

</div>
</div>
<!-- breadcrumb -->


<div class="container">

<div class="row g-4">

@foreach ($exports as $export)

<div class="col-md-6">

<div class="card h-100">

<img src="{{ $export->ogImage ? asset('exportimage/'.$export->ogImage) : asset('slider/image_default.png') }}"
class="card-img-top export-img"
alt="{{ $export->title }}"
title="{{ $export->title }}"
loading="lazy">


<div class="card-body d-flex flex-column">

<h5 class="fw-bold">{{ $export->title }}</h5>


<p class="text-muted">

{{ $export->created_at ? $export->created_at->diffForHumans() : '' }}

</p>


<p>

{{ Str::limit(strip_tags(html_entity_decode($export->details)),120,'...') }}
</p>


<a href="{{ route('exportdetails',$export->slug) }}"
class="btn btn-primary mt-auto">

Read More

</a>


</div>

</div>

</div>

@endforeach

</div>

</div>


@endsection