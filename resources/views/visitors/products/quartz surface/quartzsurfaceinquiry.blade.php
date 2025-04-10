@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title"
        style="background-image: url('https://www.kajariaceramics.com/concept-picture/high002650.jpg');">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>{{ $data->name }}</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a>
                    &nbsp;<span>{{ $data->name }}</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h3 class="container">Home/{{ $data->name }}</h3>
    </div> --}}

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if ($data->mainImg)
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" id="big-image" class="img-responsive">
                @endif
            </div>
        </div>
    </div>
    <div class="container mini-image">
        <div class="row">
            <div class="col-md-2">
                @if ($data->mainImg)
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" onclick="miniImage(this)"
                        class="img-responsive quartzinquiry-galaryimage1 ">
                @endif
            </div>
            <div class="col-md-2">
                @if ($data->subImg1)
                    <img src="{{ asset('quartz/' . $data->subImg1) }}" alt="" onclick="miniImage(this)"
                        class="img-responsive quartzinquiry-galaryimage1">
                @endif
            </div>
            <div class="col-md-2">
                @if ($data->mainImg)
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" onclick="miniImage(this)"
                        class="img-responsive quartzinquiry-galaryimage1">
                @endif
            </div>
        </div>
    </div> --}}
    <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide quartzinquiry-image" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @if ($data->mainImg)
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                @endif
                @if ($data->subImg1)
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                @endif
                @if ($data->subImg2)
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                @endif
                @if ($data->subImg3)
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                @endif
                @if ($data->subImg4)
                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                @endif
                @if ($data->subImg5)
                    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                @endif
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @if ($data->mainImg)
                    <div class="item active">
                        <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="..."
                            class="img-responsive carousel-image" width="100%" height="20px">
                    </div>
                @endif
                @if ($data->subImg1)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg1) }}" alt="..."
                            class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg2)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg2) }}" alt="..."
                            class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg3)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg3) }}" alt="..."
                            class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg4)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg4) }}" alt="..."
                            class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg5)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg5) }}" alt="..."
                            class="img-responsive carousel-image">
                    </div>
                @endif
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container product-con-details">
        <div class="row">
            <div class="col-md-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone me-3"></i>Product Information</h3>
                </div>

                {{-- <div class="productinformation"> --}}
                <div class="col-md-5 product-details product-infom-card">
                    <h3 class="product-title-heading">SPACES</h3>
                    <h3>Primary Color :</h3>
                    <p>{{ $data->primarycolors }}</p>
                    <h3>Stock :</h3>
                    <p>{{ $data->stock }}</p>
                    <h3>Book Match :</h3>
                    <p>{{ $data->bookmatch }}</p>
                    <h3>Available Finish :</h3>
                    <p>{{ $data->finishType }}</p>
                    {{-- <div class="col-lg-3 product-details1" style="border: 1px solid black"> --}}
                    <h3 class="product-title-heading">SIZES</h3>
                    <h3>Thickness :</h3>
                    <p>{{ $data->thicknesses }}</p>
                    <h3>Slab Size :</h3>
                    <p>{{ $data->sizes }}</p>

                    {{-- </div> --}}
                </div>


                <div class="col-md-5 product-details product-details3 product-infom-card">
                    <h3 class="product-title-heading">APPLICATIONS</h3>
                    <h3>Flooring :</h3>
                    <p>Residential <i class="fa fa-check"></i></p>
                    <p>Commercial <i class="fa fa-check"></i></p>
                    <h3>Counters :</h3>
                    <p>Residential <i class="fa fa-check"></i> </p>
                    <p>Commercial <i class="fa fa-check"></i></p>
                    <h3>Wall :</h3>
                    <p>Residential <i class="fa fa-check"></i> </p>
                    <p>Commercial <i class="fa fa-check"></i></p>
                    <h3>Other :</h3>
                    <p>Residential <i class="fa fa-check"></i> </p>
                    <p>Commercial<i class="fa fa-xmark"></i></p>
                </div>
            </div>
            {{-- </div> --}}

            <div class="contact-title1 col-md-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone me-3"></i>Product Inquiry</h3>
                </div>
                <div class="contact-form-area1">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                        method="post">
                        <div class="col-md-12 input">
                            <input type="text" name="form_name" value="" placeholder="Your Name " required=""
                                class="inp">
                        </div>
                        <div class="col-md-12 input">
                            <input type="email" name="form_email" value="" placeholder="Email" required=""
                                class="inp">
                        </div>
                        <div class="col-md-12 input">
                            <input type="text" name="form_phone" value="" placeholder="Contact Number"
                                required="" class="inp">
                        </div>
                        <div class="col-md-12 input">
                            <textarea placeholder="Message" name="form_message" required="" class="inp"></textarea>
                        </div>
                    </form>
                    <div class="btn-class">
                        <button type="submit" class="btn-one btn-class1" data-loading-text="Please wait...">Request
                            Price Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        let bgImage = document.getElementById('big-image');
        let galleryImages = document.querySelectorAll(' .quartzinquiry-galaryimage1');


        function miniImage(image) {

            bgImage.src = image.src;
            galleryImages.forEach(function(img) {
                img.classList.remove('active');
                img.style.border = '';
            });


            image.classList.add('active');
            image.style.border = '7px solid gray';
        }

        window.onload = function() {
            if (galleryImages.length > 0) {
                galleryImages[0].classList.add('active');
                galleryImages[0].style.border = '7px solid gray'; // Apply border to the first image
            }
        }
    </script>
@endsection
