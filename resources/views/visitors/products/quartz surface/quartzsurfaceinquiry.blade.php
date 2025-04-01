@extends('layouts.app')
@section('content')
    <div class="heading-title container-fluid">
        <h3 class="container">Home/{{ $data->name }}</h3>
    </div>

    <div class="container-fluid">
        <div class="row">
                        <div class="col-lg-2">
                @if ($data->mainImg)
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" width="52%" height="100px"
                        class="spcinquiry-galaryimage1" onclick="miniImage(this)">
                @endif
                @if ($data->subImg1)
                    <img src="{{ asset('quartz/' . $data->subImg1) }}" alt="" width="52%" height="100px"
                        class="spcinquiry-galaryimage1" onclick="miniImage(this)">
                @endif
                @if ($data->mainImg)
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" width="52%" height="100px"
                        class="spcinquiry-galaryimage1" onclick="miniImage(this)">
                @endif
            </div>
            <div class="col-lg-10">
                @if ($data->mainImg)
                <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="" width="100%" height="450px"
                    id="big-image" class="spcproductimage1">
            @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone me-3"></i>Product Information</h3>
                </div>

                {{-- <div class="productinformation"> --}}
                <div class="col-lg-5 product-details1" style="border: 1px solid black;">
                    <h3>Spaces</h3>
                    <h3>Primary Color :</h3>
                    <h4>{{$data->primarycolors}}</h4>
                    <h3>Stock :</h3>
                    <h4>{{$data->stock}}</h4>
                    <h3>Book Match :</h3>
                    <h4>{{$data->bookmatch}}</h4>
                    <h3>Available Finish :</h3>
                    <h4>{{$data->finishType}}</h4>
                    {{-- <div class="col-lg-3 product-details1" style="border: 1px solid black"> --}}
                    <h3>SIZES</h3>
                    <h3>Thickness :</h3>
                    <h4>{{$data->thicknesses}}</h4>
                    <h3>Slab Size :</h3>
                    <h4>{{$data->sizes}}</h4>

                    {{-- </div> --}}
                </div>


                <div class="col-lg-5 product-details1" style="border: 1px solid black">
                    <h3>APPLICATIONS</h3>
                    <h3>Flooring :</h3>
                    <h4>Residential <i class="fas fa-check quart-icon"></i></h4>
                    <h4>Commercial<i class="fas fa-check quart-icon"></i></h4>
                    <h3>Counters :</h3>
                    <h4>Residential<i class="fas fa-check quart-icon"></i> </h4>
                    <h4>Commercial<i class="fas fa-check quart-icon"></i></h4>
                    <h3>Wall :</h3>
                    <h4>Residential<i class="fas fa-check quart-icon"></i> </h4>
                    <h4>Commercial<i class="fas fa-check quart-icon"></i></h4>
                    <h3>Other :</h3>
                    <h4>Residential<i class="fas fa-check quart-icon"></i> </h4>
                    <h4>Commercial<i class="fa-solid fa-xmark"></i></h4>
                </div>
            </div>
            {{-- </div> --}}

            <div class="contact-title1 col-lg-6" style="margin-top: 60px"><i class="fa-solid fa-clone me-3"></i>Product Inquiry
                <div class="contact-form-area1">
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                        method="post">
                        <div class="col-lg-12 input">
                            <input type="text" name="form_name" value="" placeholder="Your Name " required="">
                        </div>
                        <div class="col-lg-12 input">
                            <input type="email" name="form_email" value="" placeholder="Email" required="">
                        </div>
                        <div class="col-lg-12 input">
                            <input type="text" name="form_phone" value="" placeholder="Contact Number"
                                required="">
                        </div>
                        <div class="col-lg-12 input">
                            <textarea placeholder="Message" name="form_message" required=""></textarea>
                        </div>
                    </form>
                    <div class="btn-class">
                        <button type="submit" class="btn-one" data-loading-text="Please wait..."
                            style="width: 100%;">Request
                            Price Quote</button>
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
