@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore Argil's achievements and
awards in the quartz manufacturing industry. See how we innovate and lead
with excellence." />
    <meta name="keywords"
        content="Argil Achievements, Quartz Awards,
Argil Tiles Success, Industrial Excellence, Company Milestones" />
    <meta property="og:title" content="Argil Group Achievements – Excellence
in Quartz Manufacturing">
    <meta property="og:description"
        content="Discover the milestones, awards,
and industry recognitions that define Argil Group’s success in artificial quartz
stone manufacturing. Our journey of excellence continues.">

    <meta property="og:url" content="https://argiltiles.com/achievements">
    <meta name="twitter:title" content="Argil Group Achievements – Excellence
 in Quartz Manufacturing">
    <meta name="twitter:description"
        content="Explore the awards,
certifications, and recognitions that showcase Argil Group’s commitment
to quality, innovation, and leadership in the artificial quartz industry.">

    <link rel="canonical" href="https://argiltiles.com/achievements" data-
    react-helmet="true">
    <title>Argil Achievements | Awards & Milestones in Quartz Industry</title>
@endsection
@section('content')
     <!-- breadcrumb -->
     <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Achievments</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pt-5 text-justify">The Founder has been in the business since last 60 years within which he
                    has scaled new heights regularly. He has been recognized a number times and mostly by credible
                    institutions including the government of India.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/asset/achievementimage1.jpeg')}}" alt="argil National Award" laoding="lazy" class="img-fluid h-75">
            </div>

            <div class="col-md-3">
                <p class="pt-5 text-justify">
                    National Award for the year 1997 (for best quality products) from vice president of India

                </p>
                <h2>
                    National Award
                </h2>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/asset/achievementimage2.jpeg')}}" alt="argil Export Awards" loading="lazy" class="img-fluid h-75">
            </div>

            <div class="col-md-3">
                <p class="pt-5 text-justify">
                    Highest Export Awards, Govt. of India and State

                </p>
                <h2>

                    Export Awards </h2>
            </div>

        </div>

    </div>

@endsection
