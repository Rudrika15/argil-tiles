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
<style>
    .breadcrumb{
    background: linear-gradient(135deg,#0d6efd,#0b5ed7);
    color:#fff;
    padding:60px 0;
}

.breadcrumb h1{
    color:#fff;
    margin:0;
}

.card{
    border-radius:16px;
}

.card-body{
    line-height:1.5;
}

.btn{
    border-radius:50px;
}
</style>
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
{{-- 
<!-- Content -->
<div class="container py-5">

    <div class="row">
 
        <div class="col-md-12 ">

          @if($page->og_image && file_exists(public_path($page->og_image)))
   <center> <img src="{{ asset($page->og_image) }}"
         alt="{{ $page->title }}"
         class="img-fluid mb-4 " width="50%" height="50%" ></center>
@endif

           
            {!!  html_entity_decode($page->description) !!}

        </div>

    </div>

</div>

            
        </div>
    </div>
</div> 
<div class="col-md-12 text-center justify-content-center py-5">
    
    <h3 class="mb-3">Explore Our Premium Product Collection</h3>

    <p class="text-muted mb-4" style="max-width: 700px; margin: 0 auto;">
        Discover high-quality solutions designed to meet the needs of residential,
        commercial, and industrial projects. Browse our product range to find the
        perfect combination of durability, performance, and aesthetic appeal.
    </p>

    <a href="http://127.0.0.1:8000/quartzsurface" class="btn btn-primary btn-lg px-4">
        Explore Products
    </a>

</div> --}}
@if($page->og_image && file_exists(public_path($page->og_image)))
<div class="text-center mb-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-3">
            <img src="{{ asset($page->og_image) }}"
                 alt="{{ $page->title }}"
                 class="img-fluid rounded w-50 h-50">
        </div>
    </div>
</div>
@endif

<div class="container py-5">
    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4 p-lg-5">

                    {{-- {!! html_entity_decode($page->description) !!} --}}
                    {!! str_replace('<br>', '', html_entity_decode($page->description)) !!}
                </div>
            </div>

        </div>

    </div>
</div>

<div class="col-md-12 text-center justify-content-center py-5">
    
    <h3 class="mb-3">Explore Our Premium Product Collection</h3>

    <p class="text-muted mb-4" style="max-width: 700px; margin: 0 auto;">
        Discover high-quality solutions designed to meet the needs of residential,
        commercial, and industrial projects. Browse our product range to find the
        perfect combination of durability, performance, and aesthetic appeal.
    </p>

 
    
   @if($productUrl)
       <a  href="{{ $productUrl }}" class="btn btn-primary btn-lg px-4">
        Explore Products
    </a>
@endif

</div>
@endsection