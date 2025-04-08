@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title"
        style="background-image: url('https://www.kajariaceramics.com/concept-picture/high002650.jpg');">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>{{ $data->names }}</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a>
                    &nbsp;<span>{{ $data->names }}</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- <div class="heading-title container-fluid">
        <h2 class="container">Home/{{ $data->names }}</h2>
    </div> --}}

    <div class="container spcprodcut-image">
        <div class="row">
            <div class="col-md-3 galaryimage">

                @if ($data->mainImg)
                    <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" onclick="miniImage(this)"
                        class="img-responsive galary-mini-image spcinquiry-galaryimage">
                @endif

                @if ($data->subImg1)
                    <img src="{{ asset('spc/' . $data->subImg1) }}" alt="" onclick="miniImage(this)"
                        class="img-responsive galary-mini-image spcinquiry-galaryimage">
                @endif
            </div>
            <div class="col-md-9">

                <div class="first-image">

                    @if ($data->mainImg)
                        <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" id="big-image"
                            class="img-responsive spcproductimage">
                    @endif
                    @if ($data->subImg1)
                        <img src="{{ asset('spc/' . $data->subImg1) }}" alt="" id="big-image"
                            class="img-responsive spcproductimage spcproductimage1">
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="container productr-information">
        <div class="row">
            <div class="col-md-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone"></i>Product Information</h3>
                </div>

                <div class="col-md-6 product-details">
                    <h3>Serise Name ( s ) :</h3>
                    <p>{{ $data->names }}</p>
                    <h3>With Enhanced Beveled Edges :</h3>
                    <p>{{ $data->edges }}</p>
                    <h3>Thickness :</h3>
                    <p>{{ $data->thicknesses }}</p>
                    <h3>Click Type :</h3>
                    <p>{{ $data->clicktype }}</p>
                    <h3>Shade Variation :</h3>
                    <p>{{ $data->shadeVariation }}</p>
                </div>

                <div class="col-md-6 product-details">
                    <h3>Primary Color (s) :</h3>
                    <p>{{ $data->primarycolors }}</p>
                    <h3>Backing Type :</h3>
                    <p>{{ $data->backingType }}</p>
                    <h3>Style :</h3>
                    <p>{{ $data->style }}</p>
                    <h3>Wear Layer :</h3>
                    <p>{{ $data->wearLayer }}</p>
                </div>
            </div>

            <div class="contact-title1 col-md-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone"></i>Product Inquiry</h3>
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
    </div>


    <script>
        let bgImage = document.getElementById('big-image');
        let galleryImages = document.querySelectorAll('.spcinquiry-galaryimage, .spcinquiry-galaryimage1');


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
