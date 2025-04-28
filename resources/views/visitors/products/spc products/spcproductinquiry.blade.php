@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Argil is a leading manufacturer of premium artificial quartz stone slabs in Morbi, Gujarat. Explore quartz for homes & businesses.">
    <meta name="keywords" content="Artificial Quartz, Quartz Slabs, Quartz Manufacturers, Morbi Quartz, India Quartz Stone">
    <meta property="og:title" content="SPC Product Inquiry | Argil Quartz Surfaces" data-react-helmet="true">
    <meta property="og:description"
        content="Explore premium artificial quartz stone slabs by Argil, a leading manufacturer in Morbi, Gujarat. Perfect for homes and businesses."
        data-react-helmet="true">
    <meta property="og:url" content="https://argiltiles.com/spcproductinquiry/{{ $data->id }}" data-react-helmet="true">

    <meta name="twitter:title" content="SPC Product Inquiry | Argil Quartz Surfaces" data-react-helmet="true">
    <meta name="twitter:description"
        content="Explore premium artificial quartz stone slabs by Argil, a leading manufacturer in Morbi, Gujarat. Perfect for homes and businesses."
        data-react-helmet="true">

        <link rel="canonical" href="{{ url()->current() }}">

    <title>SPC Product Inquiry | Premium SPC Flooring Solutions by Argil</title>
@endsection
@section('content')
    {{-- <!-- page title -->
    <section class="page-title" style="background-image: url('/asset/css/assets/bg-img.png');">


        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>{{ $data->names }}</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a>
                    &nbsp;<span>{{ $data->names }}</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <div class="container spcprodcut-image">
        <div class="row">
            <div class="col-md-3 galaryimage">

                @if ($data->mainImg)
                    <img src="{{ asset('spc/' . $data->mainImg) }}" alt="spc product" title="spc product"
                        onclick="miniImage(this)" class="img-responsive galary-mini-image spcinquiry-galaryimage">
                @endif

                @if ($data->subImg1)
                    <img src="{{ asset('spc/' . $data->subImg1) }}" alt="spc product" title="spc product"
                        onclick="miniImage(this)" class="img-responsive galary-mini-image spcinquiry-galaryimage">
                @endif
            </div>
            <div class="col-md-9">

                <div class="first-image">

                    @if ($data->mainImg)
                        <img src="{{ asset('spc/' . $data->mainImg) }}" alt="spc product" title="spc product" id="big-image"
                            class="img-responsive spcproductimage">
                    @endif
                    @if ($data->subImg1)
                        <img src="{{ asset('spc/' . $data->subImg1) }}" alt="spc product" title="spc product" id="big-image"
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
                    <h3><i class="fa fa-files-o"></i>Product Information</h3>
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
                    <h3><i class="fa fa-files-o"></i>Product Inquiry</h3>
                </div>
                <div class="contact-form-area1">

                    <form id="contact-form" name="contact_form" class="default-form">
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $data->names }}">

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
                        <input type="hidden" name="product_details" value="spc product">
                        <div class="btn-class">
                            <button type="submit" class="btn-one btn-class1">Request Price Quote</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div> --}}


     <!-- breadcrumb -->
     <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / {{ $data->names }}</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">

        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">SPC Flooring tiles</h2>
            <div class="col-md-4 pt-5">
                <div class="card">
                    <img src="{{ asset('spc/' . $data->mainImg) }}" class="img-thumbnail" style="height: 400px;" alt="spc product" loading="lazy">
                </div>
            </div>
            <div class="col-md-8 pt-5">
                <div class="row">
                    <div class="col-md-6">

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
                    <div class="col-md-6">

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
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required>
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                            required>
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingContact" placeholder="Contact Number"
                            required>
                        <label for="floatingContact">Contact Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message"
                            style="height: 150px;" required></textarea>
                        <label for="floatingMessage">Your Message</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>
            </div>

        </div>

    </div>

    </div>


    {{-- <script>
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
    </script> --}}

    {{-- inquiry  --}}
    {{-- <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Check if all required fields are filled
            const isFormValid = form.checkValidity();

            // If the form is valid, change the button text to "Submitting..."
            if (isFormValid) {
                submitBtn.innerHTML = "Submitting...";
            } else {
                // If form is not valid, just return without making AJAX request
                return;
            }

            // Disable the button to prevent multiple submissions
            submitBtn.disabled = true;

            const formData = new FormData(form);

            fetch("{{ Route('send.inquiry') }}", {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Thank you!',
                            text: 'Your inquiry has been submitted successfully.',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text',
                                confirmButton: 'swal-button'
                            }
                        });

                        // Reset the form
                        form.reset();
                    }
                })
                .finally(() => {
                    // Re-enable the button and restore original text
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                });
        }); --}}
    {{-- </script> --}}
@endsection
