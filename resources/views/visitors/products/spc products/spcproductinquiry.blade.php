@extends('layouts.app')
@section('content')
    <div class="heading-title container-fluid">
        <h3 class="container">Home/{{ $data->names }}</h3>
    </div>

    <div class="container">
        <div class="row" style="justify-content: center">
            <div class="col-lg-3 galaryimage" style="margin-top: 13%">

                @if ($data->mainImg)
                    <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" width="38%" height="130px"
                        class="spcinquiry-galaryimage" onclick="miniImage(this)">
                @endif

                @if ($data->subImg1)
                    <img src="{{ asset('spc/' . $data->subImg1) }}" alt="" width="38%" height="130px"
                        class="spcinquiry-galaryimage" onclick="miniImage(this)">
                @endif
            </div>
            <div class="col-lg-6">

                <div class="first-image d-flex">

                    @if ($data->mainImg)
                        <img src="{{ asset('spc/' . $data->mainImg) }}" alt="" width="100%" height="580px"
                            id="big-image" class="spcproductimage">
                    @endif
                    @if ($data->subImg1)
                        <img src="{{ asset('spc/' . $data->subImg1) }}" alt="" width="100%" height="580px"
                            id="big-image" style="display: none" class="spcproductimage">
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-title">
                    <h3><i class="fa-solid fa-clone me-3"></i>Product Information</h3>
                </div>

                <div class="col-lg-6 product-details">
                    <h3>Serise Name ( s ) :</h3>
                    <h4>{{ $data->names }}</h4>
                    <h3>With Enhanced Beveled Edges :</h3>
                    <h4>{{ $data->edges }}</h4>
                    <h3>Thickness :</h3>
                    <h4>{{ $data->thicknesses }}</h4>
                    <h3>Click Type :</h3>
                    <h4>{{ $data->clicktype }}</h4>
                    <h3>Shade Variation :</h3>
                    <h4>{{ $data->shadeVariation }}</h4>
                </div>

                <div class="col-lg-6 product-details">
                    <h3>Primary Color (s) :</h3>
                    <h4>{{ $data->primarycolors }}</h4>
                    <h3>Backing Type :</h3>
                    <h4>{{ $data->backingType }}</h4>
                    <h3>Style :</h3>
                    <h4>{{ $data->style }}</h4>
                    <h3>Wear Layer :</h3>
                    <h4>{{ $data->wearLayer }}</h4>
                </div>
            </div>

            <div class="contact-title1 col-lg-6" style="margin-top: 59px"><i class="fa-solid fa-clone me-3"></i>Product Inquiry
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
                galleryImages[0].style.border = '7px solid gray';  // Apply border to the first image
            }
        }
    </script>
@endsection
