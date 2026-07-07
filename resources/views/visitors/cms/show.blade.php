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

.top{
     color:#ccb19b;
    font-size:15px;
    letter-spacing:2px;
    font-weight:600;
    margin-bottom:20px;
}
.hero-section{
     background:#121212;
    padding:90px 0 260px;
    color:#fff;
    text-align:center;
    position:relative;
    height: 450px;
}
.title{
    font-family:'Cormorant Garamond', serif;
    font-size:72px;
    line-height:1.1;
    font-weight:600;
    max-width:900px;
    margin:auto;
    word-wrap:break-word;
    overflow-wrap:break-word;
}

@media (max-width:992px){
    .title{
        font-size:52px;
    }
}

@media (max-width:768px){
    .title{
        font-size:36px;
    }
}

@media (max-width:576px){
    .title{
        font-size:30px;
        line-height:1.2;
    }
}

.hero-divider{
    width:120px;
    height:2px;
    background:#ccb19b;
    margin:25px auto;
    position:relative;
}
.hero-divider::before{
    content:"✦";
    position:absolute;
    left:50%;
    top:-11px;
    transform:translateX(-50%);
    color:#ccb19b;
}
.featured-image-section{
    margin-top:-170px;
    position:relative;
    z-index:10;
}

.featured-image-card{
    position:relative;
    overflow:hidden;
    border-radius:28px;
    padding:10px;
    background:rgba(255,255,255,0.12);
    border:1px solid rgba(255,255,255,0.4);

    box-shadow:
        0 0 15px rgba(255,255,255,0.4),
        0 0 40px rgba(255,255,255,0.25),
        0 25px 50px rgba(0,0,0,0.25);

    backdrop-filter:blur(10px);
}

.featured-image-card img{
    display:block;
    width:100%;
    height:650px;
    object-fit:cover;
    border-radius:20px;
}

.article-section{
    padding:80px 0;
}
.explore{
    max-width:900px;
    margin:0 auto;

    background:#fff;
    border-radius:30px;
    padding:50px;

    border:1px solid rgba(204,177,155,.25);

    box-shadow:
        0 10px 30px rgba(0,0,0,.05),
        0 25px 60px rgba(0,0,0,.08);

    position:relative;
    overflow:hidden;
}



.explore::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:linear-gradient(
        90deg,
        #ccb19b,
        #e5d6ca
    );
}
.author-info{
    flex:1;
}

.author-info span{
    display:inline-block;
    margin-bottom:10px;

    color:#b08d72;
    font-size:12px;
    letter-spacing:3px;
    font-weight:700;
    text-transform:uppercase;
}

.author-info h4{
    font-family:'Cormorant Garamond', serif;
    font-size:38px;
    font-weight:700;
    color:#1d1d1d;
    margin-bottom:15px;
}

.author-info p{
    margin:0;
    color:#666;
    line-height:1.9;
    font-size:16px;
    max-width:700px;
}

.blog-content{
    background:#fff;
    padding:60px;
    border-radius:24px;
    box-shadow:0 10px 35px rgba(0,0,0,.08);
    font-size:18px;
    line-height:2;
    color:#444;
}

.blog-content h2,
.blog-content h3,
.blog-content h4{
    color:#222;
    font-weight:700;
    margin-top:35px;
    margin-bottom:20px;
}

.blog-content p{
    margin-bottom:20px;
}

.blog-content img{
    max-width:100%;
    height:auto;
    border-radius:16px;
    margin:30px 0;
}

.blog-content ul,
.blog-content ol{
    padding-left:25px;
    margin-bottom:20px;
}

.blog-content li{
    margin-bottom:10px;
}

.blog-content p:first-child:first-letter{
    float:left;
    font-size:80px;
    line-height:65px;
    color:#ccb19b;
    margin-right:12px;
    font-family:serif;
}

@media (max-width:768px){
    .article-section{
        padding:50px 0;
    }

    .blog-content{
        padding:30px;
        font-size:16px;
    }

    .blog-content p:first-child:first-letter{
        font-size:55px;
        line-height:45px;
    }
}
</style>
@section('content')

<!-- Breadcrumb -->
<section class="hero-section">
    <div class="overlay">
        <div class="container text-center text-white">
            <span class="top">ARGIL GROUP</span>
            <h1 class="title">{{ $page->title }}</h1>
            <div class="hero-divider"></div>
            <p class="lead">Premium Surface Solutions for Modern Living</p>
        </div>
    </div>
</section>
{{-- 
<!-- Content -->
<div class="container py-5">

    <div class="row">
 
        <div class="col-md-12  ">

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
<section class="featured-image-section">
    <div class="container">
        <div class="featured-image-card">
            <img src="{{ asset($page->og_image) }}"
                 alt="{{ $page->title }}">
        </div>
    </div>
</section>
@endif
<div class="article-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-10">
                <div class="blog-content">
                    {!! str_replace('<br>', '', html_entity_decode($page->description)) !!}
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container py-5">
    @if($productUrl)
    <div class="explore mx-auto">

        <div class="author-info text-center">
            <span>DISCOVER MORE</span>

            <h4>Explore Our Premium Product Collection</h4>

            <p>
                Discover high-quality solutions designed to meet the needs of
                residential, commercial, and industrial projects. Browse our
                product range to find the perfect combination of durability,
                performance, and aesthetic appeal.
            </p>

            <a href="{{ $productUrl }}" class="btn btn-primary btn-lg mt-4 px-4">
                Explore Products
            </a>
        </div>

    </div>
    @endif
</div>

@endsection