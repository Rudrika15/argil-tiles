@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Argil is a leading artificial quartz stone slab manufacturer in Morbi, Gujarat. Explore premium quartz surfaces for homes and businesses.">
    <meta name="keywords" content="Artificial Quartz, Quartz Slabs, Quartz Manufacturers, Morbi Quartz, India Quartz Stone">
    <meta property="og:title" content="Quartz Inquiry | Argil Quartz Surfaces" data-react-helmet="true">
    <meta property="og:description"
        content="Explore premium artificial quartz stone slabs from Argil, trusted by homeowners and businesses in India."
        data-react-helmet="true">
    <meta property="og:url" content="https://argiltiles.com/quartzinquiry/{{ $data->id }}">

    <meta name="twitter:title" content="Quartz Inquiry | Argil Quartz Surfaces" data-react-helmet="true">
    <meta name="twitter:description"
        content="Explore premium artificial quartz stone slabs from Argil, trusted by homeowners and businesses in India."
        data-react-helmet="true">

        <link rel="canonical" href="{{ url()->current() }}">

    <title>Quartz Inquiry | Premium Quartz Surfaces by Argil</title>
    @endsection
@section('content')
    <!-- page title -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <section class="page-title" style="background-image: url('/asset/css/assets/bg-img.png');">


        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>{{ $data->name }}</h1>
                </div>
                <div class="bread-crumb">
                    <a href="/">Home &nbsp;<i class="fa fa-angle-right"></i></a>
                    &nbsp;<span>{{ $data->name }}</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

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
                        <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image" width="100%"
                            height="20px">
                    </div>
                @endif
                @if ($data->subImg1)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg1) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg2)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg2) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg3)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg3) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg4)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg4) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image">
                    </div>
                @endif
                @if ($data->subImg5)
                    <div class="item">
                        <img src="{{ asset('quartz/' . $data->subImg5) }}" alt="quartzsurface tiles image"
                            title="quartzsurface tiles image" class="img-responsive carousel-image">
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
                    <h3><i class="fa fa-files-o"></i>Product Information</h3>
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
                    <p>Commercial <i class="fa fa-times"></i></p>
                </div>
            </div>
            {{-- </div> --}}

            <div class="contact-title1 col-md-6">
                <div class="product-title">
                    <h3><i class="fa fa-files-o"></i>Product Inquiry</h3>
                </div>
                <div class="contact-form-area1">
                    <form id="contact-form" name="contact_form" class="default-form">
                        @csrf
                        <input type="hidden" name="product_name" value="{{ $data->name }}">
                        <div class="col-md-12 input">
                            <input type="text" name="form_name" value="" placeholder="Your Name "
                                required="" class="inp">
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
                        <input type="hidden" name="product_details" value="Quartz product">
                        <div class="btn-class">
                            <button type="submit" class="btn-one btn-class1">Request Price Quote</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- inquiry  --}}
    <script>
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
        });
    </script>
@endsection
