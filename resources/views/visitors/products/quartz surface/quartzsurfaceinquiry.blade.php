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

    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "{{ $data->name }}",
          "image": ["{{ asset('quartz/' . $data->mainImg) }}"],
          "description": " Thickness : {{ $data->thicknesses }} , Primary color : {{ $data->primarycolors }} ",
          "brand": {
            "@type": "Brand",
            "name": "Argil Group"
          },
          "review": [

          {
            "@type": "Review",
            "author": {
              "@type": "Person",
              "name": "Chandan Gupta"
            },
            "datePublished": "{{ $data->created_at->toDateString() }}",
            "reviewBody": "
            Impressed with the quality and elegant finish of Argil’s quartz. Smooth texture, excellent durability, and a classy touch to our space. Highly recommended!"
          }
          ]

        }
        </script>
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

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            @if ($data->mainImg)
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            @endif
            @if ($data->subImg1)
                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $data->mainImg ? 1 : 0 }}"></button>
            @endif
            @if ($data->subImg2)
                <button type="button" data-bs-target="#demo"
                    data-bs-slide-to="{{ $data->mainImg && $data->subImg1 ? 2 : 1 }}"></button>
            @endif
            @if ($data->subImg3)
                <button type="button" data-bs-target="#demo"
                    data-bs-slide-to="{{ $data->mainImg && $data->subImg2 ? 3 : 2 }}"></button>
            @endif
            @if ($data->subImg4)
                <button type="button" data-bs-target="#demo"
                    data-bs-slide-to="{{ $data->mainImg && $data->subImg3 ? 4 : 3 }}"></button>
            @endif
            @if ($data->subImg5)
                <button type="button" data-bs-target="#demo"
                    data-bs-slide-to="{{ $data->mainImg && $data->subImg4 ? 5 : 4 }}"></button>
            @endif
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @if ($data->mainImg)
                <div class="carousel-item active">
                    <img src="{{ asset('quartz/' . $data->mainImg) }}" alt="Main Image" class="d-block w-100 img-fluid"
                        style="object-fit: cover; height: 100vh;">
                </div>
            @endif
            @foreach (['subImg1', 'subImg2', 'subImg3', 'subImg4', 'subImg5'] as $index => $img)
                @if ($data->$img)
                    <div class="carousel-item @if (!$data->mainImg && $index == 0) active @endif">
                        <img src="{{ asset('quartz/' . $data->$img) }}" alt="Image {{ $index + 1 }}"
                            class="d-block w-100 img-fluid" style="object-fit: cover; height: 100vh;">
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-4">
                <h2 class="fw-bold"><i class="bi bi-file-earmark-text"></i> Product Information</h2>
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
                <h2 class="fw-bold"><i class="bi bi-file-earmark-text"></i> Product Inquiry</h2>

                <form class="mt-3" id="contact-form" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="product_id" value="{{ $data->id }}"> --}}
                    <input type="hidden" name="product_name" value="{{ $data->name }}">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name"
                            name="form_name" required oninvalid="this.setCustomValidity('The name field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                            name="form_email" required oninvalid="this.setCustomValidity('The email field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="form_phone" placeholder="Contact Number"
                            name="form_phone" required
                            oninvalid="this.setCustomValidity('The contact field is required.')"
                            oninput="this.setCustomValidity('')" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                    </div>

                    <div class=" mb-3">
                        <textarea class="form-control" id="" name="form_message" placeholder="Your Message" style="height: 150px;"
                            required oninvalid="this.setCustomValidity('The message field is required.')"
                            oninput="this.setCustomValidity('')"></textarea>
                        {{-- <label for="floatingMessage">Your Message</label> --}}
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

            // Get intlTelInput instance
            const iti = window.intlTelInputGlobals.getInstance(document.querySelector('#form_phone'));

            // Get full international number
            const fullPhone = iti.getNumber();

            // Remove original form_phone and add formatted one
            formData.delete('form_phone');
            formData.append('form_phone', fullPhone);

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

    <script>
        const input = document.querySelector("#form_phone");

        window.intlTelInput(input, {
            initialCountry: "in", // default country code (India)
            separateDialCode: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
    </script>
@endsection
