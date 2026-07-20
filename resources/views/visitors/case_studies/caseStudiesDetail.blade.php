@extends('layouts.app')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap');

.blog-hero{
    background:#121212;
    padding:90px 0 260px;
    color:#fff;
    text-align:center;
    position:relative;
}

.blog-category{
    color:#ccb19b;
    font-size:15px;
    letter-spacing:2px;
    font-weight:600;
    margin-bottom:20px;
}

.blog-title{
    font-family:'Cormorant Garamond', serif;
    font-size:72px;
    line-height:1.1;
    font-weight:600;
    max-width:900px;
    margin:auto;
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
    top:-14px;
    transform:translateX(-50%);
    color:#ccb19b;
}

.blog-meta{
    display:flex;
    justify-content:center;
    gap:35px;
    flex-wrap:wrap;
    margin-top:25px;
}

.blog-meta span{
    color:#e4e4e4;
}

.featured-image-section{
    margin-top:-170px;
    position:relative;
    z-index:10;
}.featured-image-card{
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

.share-sidebar{
    position:sticky;
    top:120px;
}

.share-sidebar h6{
    margin-bottom:25px;
    color:#555;
    font-size:13px;
}

.share-sidebar a{
    display:block;
    margin-bottom:20px;
    color:#666;
    text-decoration:none;
}

.blog-content{
    font-size:20px;
    line-height:2;
    color:#444;
}

.blog-content p:first-child:first-letter{
    float:left;
    font-size:90px;
    line-height:70px;
    color:#ccb19b;
    margin-right:12px;
    font-family:'Cormorant Garamond', serif;
}
.quote-box{
    position:relative;
    margin:10px 0;
    padding:50px 60px;
    text-align:center;
    background:transparent;
}

.quote-box::before{
    content:"\201C";
    position:absolute;
    top:-40px;
    left:50%;
    transform:translateX(-50%);
    font-family:'Cormorant Garamond', serif;
    font-size:140px;
    line-height:1;
    color:#ccb19b;
    opacity:.25;
}

.quote-box blockquote{
    margin:0;
    font-family:'Cormorant Garamond', serif;
    font-size:38px;
    line-height:1.5;
    font-weight:600;
    color:#222;
    font-style:italic;
    position:relative;
}

.quote-author{
    display:block;
    margin-top:25px;
    font-size:14px;
    letter-spacing:3px;
    text-transform:uppercase;
    color:#b08d72;
    font-weight:600;
}

.quote-box::after{
    content:'';
    display:block;
    width:120px;
    height:2px;
    background:#ccb19b;
    margin:30px auto 0;
}
.author-box{
    position:relative;
    background:#fff;
    border-radius:30px;
    padding:45px;
    margin-top:50px;

    display:flex;
    align-items:center;
    gap:35px;

    border:1px solid rgba(204,177,155,.25);

    box-shadow:
        0 10px 30px rgba(0,0,0,.05),
        0 25px 60px rgba(0,0,0,.08);

    overflow:hidden;
}

.author-box::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:6px;
    height:100%;
    background:linear-gradient(
        to bottom,
        #ccb19b,
        #e5d6ca
    );
}

.author-logo{
    flex-shrink:0;
}

.author-logo img{
    width:130px;
    height:130px;
    object-fit:contain;
    padding:20px;
    margin-left:20px;
    background:#f8f5f2;
    border-radius:50%;

    box-shadow:
        0 0 0 8px rgba(204,177,155,.08),
        0 10px 25px rgba(0,0,0,.08);
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

.author-btn{
    flex-shrink:0;
}

.author-btn .btn-theme{
    background:#ca748e;
    color:#fff;
    border:none;
    border-radius:50px;
    padding:14px 30px;
    font-size:14px;
    font-weight:600;
    letter-spacing:.5px;
    transition:.4s ease;
}

.author-btn .btn-theme:hover{
    background:#ccb19b;
    color:#a15666;
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(204,177,155,.35);
}
@media(max-width:991px){

    .author-box{
        flex-direction:column;
        text-align:center;
        padding:35px 25px;
    }

    .author-logo img{
        width:110px;
        height:110px;

    }

    .author-info h4{
        font-size:30px;
    }

    .author-btn{
        margin-top:10px;
    }
}
.story-block p {
    margin-bottom: 12px;
    line-height: 1.7;
} 

@media(max-width:991px){

    .blog-title{
        font-size:42px;
    }

    .featured-image-card img{
        height:400px;
    }

    .author-box{
        flex-direction:column;
        text-align:center;
    }
}

@media(max-width:768px){

    .blog-title{
        font-size:34px;
    }

    .blog-hero{
        padding:70px 0 180px;
    }

    .featured-image-section{
        margin-top:-100px;
    }

    .featured-image-card img{
        height:250px;
    }

    .blog-content{
        font-size:17px;
        line-height:1.9;
    }

    .blog-content p:first-child:first-letter{
        font-size:60px;
        line-height:55px;
    }

}
@media(max-width:768px){

    .quote-box{
        padding:30px 20px;
    }

    .quote-box blockquote{
        font-size:26px;
    }

    .quote-box::before{
        font-size:90px;
        top:-20px;
    }
}
</style>
@section('content')

{{-- ================= FULLSCREEN HERO IMAGE ================= --}}


<section class="blog-hero">
    <div class="container text-center">

        <div class="blog-category">
            Case Study Details
        </div>

        <h1 class="blog-title">
            {{ $caseStudies->title }}
        </h1>

        <div class="hero-divider"></div>
        

        {{-- <div class="blog-meta">
            <span>
                <i class="fa-regular fa-calendar"></i>
                Published on {{ $caseStudies->updated_at->format('d M Y') }}
            </span>

        </div> --}}

    </div>
</section>
<section class="featured-image-section">
    <div class="container">

        <div class="featured-image-card text-light">

            <img src="{{ asset('featured-image/'.$caseStudies->featured_image) }}"
                alt="{{ $caseStudies->title }} "
                class="img-fluid w-100">

        </div>

    </div>
</section>


{{-- ================= PROJECT DETAILS ================= --}}
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-3">
                <h6 class="text-muted">Location</h6>
                <p class="fw-semibold">{{ $caseStudies->location }}</p>
            </div>

            <div class="col-md-3">
                <h6 class="text-muted">Client</h6>
                <p class="fw-semibold">{{ $caseStudies->client_name }}</p>
            </div>

            <div class="col-md-3">
                <h6 class="text-muted">Type</h6>
                <p class="fw-semibold">{{ $caseStudies->project_type }}</p>
            </div>

            <div class="col-md-3">
                <h6 class="text-muted">Completed</h6>
                <p class="fw-semibold">
                    {{ $caseStudies->completion_date->format('d M Y') }}
                </p>
            </div>

        </div>
    </div>
</section>


{{-- ================= IMAGE GALLERY ================= --}}
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Image Gallery</h2>
            <p class="text-muted">Explore our project gallery</p>
        </div>

        @php
            $gallery = is_string($caseStudies->gallery)
                ? json_decode($caseStudies->gallery, true)
                : $caseStudies->gallery;
        @endphp

        <div class="row g-4">

            @if(!empty($gallery))
                @foreach($gallery as $image)
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="card border-0 shadow-sm h-100 gallery-card">
                            <img src="{{ asset('gallery-image/' . $image) }}"
                                 class="card-img-top gallery-img"
                                 alt="Gallery Image">
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="text-muted">No gallery images found.</p>
                </div>
            @endif

        </div>

    </div>
</section>

<style>
.gallery-card {
    overflow: hidden;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

.gallery-img {
    width: 100%;
    height: 250px;
    object-fit: fill;
    /* object-fit: cover; */
    transition: transform 0.4s ease;
}

.gallery-card:hover .gallery-img {
    transform: scale(1.08);
}
.ul{
    line-height:0.9;
}
</style>


{{-- ================= PROJECT STORY ================= --}}
<section class="py-5">
    <div class="container">

        <h2 class="mb-4">Project Story</h2>

        <div class="mb-4">
            <h4>Overview</h4>
            {!!  html_entity_decode($caseStudies->overview) !!}
        </div>

        <div class="story-block mb-4">
            <h4>Challenge</h4>
            {!!  html_entity_decode($caseStudies->challenge) !!}
        </div>

        <div class="story-block mb-4 ul">
            <h4>Solution</h4>
            {!!  html_entity_decode($caseStudies->solution) !!}
            
        </div>

        <div class="story-block mb-4">
            <h4>Result</h4>
            {!!  html_entity_decode($caseStudies->result )!!}
        </div>

    </div>
    <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4 story-block">
            <h6 class="card-title">{{ $caseStudies->products_used }}</h6>
           
        </div> 
    </div>
</section>
{{-- <section>
     <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4 story-block">
            <h6 class="card-title">{{ $caseStudies->products_used }}</h6>
           
        </div> 
    </div>
</section> --}}


{{-- ================= PRODUCTS USED ================= --}}
{{-- <section class="py-5 bg-light">
    <div class="container">

        <h2 class="mb-4">Products Used</h2>

        <div class="row g-4">
            @foreach($caseStudies->products as $product)
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <p class="text-muted small">{{ $product->short_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> 
    </div>
</section> --}}


{{-- ================= MORE PROJECTS ================= --}}
{{-- <section class="py-5">
    <div class="container">

        <h2 class="mb-4">More Projects</h2>

        <div class="row g-4">
            @foreach($moreCaseStudies as $project)
                <div class="col-md-4">
                    <a href="{{ route('case-studies.show', $project->slug) }}" class="text-decoration-none">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="{{ asset($project->thumbnail) }}" class="card-img-top" alt="{{ $project->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="text-muted small">{{ $project->location }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
</section> --}}

@endsection