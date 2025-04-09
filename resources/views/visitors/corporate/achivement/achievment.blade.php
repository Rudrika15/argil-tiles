@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title"
        style="background-image: url('https://www.kajariaceramics.com/concept-picture/high002650.jpg');">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Achievment</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Achievment</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h2 class="container">Home/Achievements</h2>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="paragraph text-justify">The Founder has been in the business since last 60 years within which he
                    has scaled new
                    heights regularly. He has been recognized a number times and mostly by credible institutions including
                    the government of India.</p>
            </div>
            <div class="col-md-6 achievment-content">
                <div class="col-md-4">
                    <img src="asset/images/argileimage/achievementimage1.jpeg" class="img-responsive award-image">
                </div>
                <div class="col-md-8">
                    <p class="paragraph2">National Award for the year 1997 (for best quality products) from vice president
                        of India</p>
                    <p class="award-title">National Award</p>
                </div>
            </div>
            <div class="col-md-6 achievment-content">
                <div class="col-md-4">
                    <img src="asset/images/argileimage/achievementimage2.jpeg" alt=""
                        class="img-responsive award-image">
                </div>
                <div class="col-md-8">
                    <p class="paragraph2">Highest Export Awards, Govt. of India and State</p>
                    <p class="award-title">Export Awards</p>
                </div>
            </div>

        </div>
    </div>
@endsection
