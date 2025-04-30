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
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / {{ $data->name }}</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->


    {{-- <div class="container-fluid">
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
    </div> --}}
    <div class="container-fluid">
        <div id="carouselExample" class="carousel slide quartzinquiry-image" data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @if ($data->mainImg)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                @endif
                @if ($data->subImg1)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                @endif
                @if ($data->subImg2)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                @endif
                @if ($data->subImg3)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                @endif
                @if ($data->subImg4)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                @endif
                @if ($data->subImg5)
                    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="5"
                        aria-label="Slide 6"></button>
                @endif
            </div>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @if ($data->mainImg)
                    <div class="carousel-item active">
                        <img src="{{ asset('quartz/' . $data->mainImg) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
                @if ($data->subImg1)
                    <div class="carousel-item">
                        <img src="{{ asset('quartz/' . $data->subImg1) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
                @if ($data->subImg2)
                    <div class="carousel-item">
                        <img src="{{ asset('quartz/' . $data->subImg2) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
                @if ($data->subImg3)
                    <div class="carousel-item">
                        <img src="{{ asset('quartz/' . $data->subImg3) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
                @if ($data->subImg4)
                    <div class="carousel-item">
                        <img src="{{ asset('quartz/' . $data->subImg4) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
                @if ($data->subImg5)
                    <div class="carousel-item">
                        <img src="{{ asset('quartz/' . $data->subImg5) }}" class="d-block w-100 carousel-image" loading="lazy"
                            alt="quartzsurface tiles image" title="quartzsurface tiles image">
                    </div>
                @endif
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    {{-- <div class="container">
        <div class="row">
            <div class="mt-5">
                <h3><i class="bi bi-file-earmark-text"></i> Product Information</h3>
            </div>

            <div class="col-md-3 col-sm-3 border border-1 border-dark p-3 rounded">
                <h4 class="pt-2">SPACES</h4>
                <h4 class="pt-1">Primary Color :</h4>
                <p>{{ $data->primarycolors }}</p>
                <h4>Stock :</h4>
                <p>{{ $data->stock }}</p>
                <h4>Book Match :</h4>
                <p>{{ $data->bookmatch }}</p>
                <h4>Available Finish :</h4>
                <p>{{ $data->finishType }}</p>
                <h4 class="pt-2">SIZES</h4>
                <h4 class="pt-1">Thickness :</h4>
                <p>{{ $data->thicknesses }}</p>
                <h4>Slab Size :</h4>
                <p>{{ $data->sizes }}</p>
            </div>



            <div class="col-md-3 col-sm-3 border border-1 border-dark p-3 rounded mb-4 ms-3">
                <h4 class="pt-2">APPLICATIONS</h4>

                <h4 class="pt-1">Flooring :</h4>
                <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                <h4>Counters :</h4>
                <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                <h4>Wall :</h4>
                <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                <h4>Other :</h4>
                <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                <p>Commercial <i class="bi bi-x-lg text-danger"></i></p> <!-- Cross icon here -->
            </div>

            <div class="col-md-5 col-sm-5 ms-5">
                <h3><i class="bi bi-file-earmark-text"></i> Product Inquiry</h3>

                <form class="mt-3">
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
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message" style="height: 150px;" required></textarea>
                        <label for="floatingMessage">Your Message</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>

            </div>

        </div>
    </div> --}}

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-4">
                <h3><i class="bi bi-file-earmark-text"></i> Product Information</h3>
            </div>

            <!-- SPACES box -->
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="border border-1 border-dark p-3 rounded h-100">
                    <h4 class="pt-2">SPACES</h4>
                    <h5 class="pt-1">Primary Color :</h5>
                    <p>{{ $data->primarycolors }}</p>
                    <h5>Stock :</h5>
                    <p>{{ $data->stock }}</p>
                    <h5>Book Match :</h5>
                    <p>{{ $data->bookmatch }}</p>
                    <h5>Available Finish :</h5>
                    <p>{{ $data->finishType }}</p>
                    <h4 class="pt-2">SIZES</h4>
                    <h5 class="pt-1">Thickness :</h5>
                    <p>{{ $data->thicknesses }}</p>
                    <h5>Slab Size :</h5>
                    <p>{{ $data->sizes }}</p>
                </div>
            </div>

            <!-- APPLICATIONS box -->
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="border border-1 border-dark p-3 rounded h-100">
                    <h4 class="pt-2">APPLICATIONS</h4>

                    <h5 class="pt-1">Flooring :</h5>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <h5>Counters :</h5>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <h5>Wall :</h5>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <h5>Other :</h5>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-x-lg text-danger"></i></p>
                </div>
            </div>

            <!-- PRODUCT INQUIRY form -->
            <div class="col-12 col-md-8 col-lg-6 mb-4">
                    <h3><i class="bi bi-file-earmark-text"></i> Product Inquiry</h3>

                    <form class="mt-3" id="contact-form" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="product_id" value="{{ $data->id }}"> --}}
                        <input type="hidden" name="product_name" value="{{ $data->name }}">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="form_name" required>
                            <label for="floatingName">Your Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com" name="form_email" required>
                            <label for="floatingEmail">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="floatingContact" placeholder="Contact Number" name="form_phone" required>
                            <label for="floatingContact">Contact Number</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="floatingMessage" name="form_message" placeholder="Your Message" style="height: 150px;" required></textarea>
                            <label for="floatingMessage">Your Message</label>
                        </div>
                        <input type="hidden" name="product_details" value="quartz product">
                        <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                    </form>

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
