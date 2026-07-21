@extends('layouts.app')

@section('seosection')
    <meta name="description" content="Read the latest blog post from Argil Tiles. Discover tips on quartz countertops, SPC flooring, and tile design.">
    <meta name="keywords" content="Argil Tiles blog, quartz countertops, SPC flooring, tile design tips, flooring ideas, interior design inspiration">
    <meta property="og:title" content="Argil Tiles Blog | Quartz, SPC Flooring & Tile Design Tips">
    <meta property="og:description" content="Get the latest tile trends, flooring ideas, and expert advice from Argil Tiles. Stay inspired with our newest blog articles.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Argil Tiles">
    <meta name="twitter:title" content="Argil Tiles Blog | Quartz, SPC Flooring & Tile Design Tips">
    <meta name="twitter:description" content="Get the latest tile trends, flooring ideas, and expert advice from Argil Tiles. Stay inspired with our newest blog articles.">
    <link rel="canonical" href="{{ url()->current() }}">

<style>@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&display=swap');

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
    top:-11px;
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
    object-fit:fill;
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
@endsection
@section('content')

<section class="blog-hero">
    <div class="container text-center">

        <div class="blog-category">
            BLOG /
            <span>{{ $blog->category ?? 'LUXURY INTERIORS' }}</span>
        </div>

        <h1 class="blog-title">
            {{ $blog->title }}
        </h1>

        <div class="hero-divider"></div>

        <div class="blog-meta">

            <span>
                <i class="fa-regular fa-pen-to-square"></i>
                Written by {{ $blog->author }}
            </span>

            <span>
                <i class="fa-regular fa-calendar"></i>
                Published on {{ $blog->updated_at->format('d M Y') }}
            </span>

            <span>
                <i class="fa-regular fa-clock"></i>
                5 min read
            </span>

        </div>

    </div>
</section>

<section class="featured-image-section">
    <div class="container">

        <div class="featured-image-card">

            <img src="{{ asset('blogimage/'.$blog->image) }}"
                alt="{{ $blog->title }}"
                class=" w-100">

        </div>

    </div>
</section>

<section class="article-section">

    <div class="container">

        <div class="row">

            <div class="col-lg-10 text-justify mx-auto">

                <div class="blog-content">
                    {!! $blog->description !!}
                </div>

                <div class="quote-box">
    <blockquote>
        Sophistication is not about being noticed,
        it's about being remembered.
    </blockquote>

    <span class="quote-author">
        — Argil Design Philosophy
    </span>
</div>

        </div>

        <div class="author-box">

            <div class="author-logo ml-2">

                <img src="{{ asset('assets/asset/logo.png') }}" class="p-3"
                    alt="Argil">

            </div>

            <div class="author-info">

                <span>ABOUT THE AUTHOR</span>

                <h4>{{ $blog->author }}</h4>

                <p>
                    Experts in Quartz, SPC Flooring and Premium Tiles.
                    Dedicated to bringing world-class surfaces that inspire timeless living.
                </p>

            </div>

            <div class="author-btn">

                <a href="{{ url('/authors/' . Str::slug($blog->author)) }}"
                    class="btn btn-theme">
                    View all articles →
                </a>

            </div>

        </div>

    </div>

</section>

@endsection