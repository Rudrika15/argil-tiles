@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore {{ $data->name }} quartz countertop slab from Argil Tiles. Premium engineered quartz manufactured in Morbi, Gujarat, India.">
    <meta name="keywords" content="{{ $data->name }}, quartz slabs, engineered quartz, quartz countertops, Argil Tiles, Morbi">
    <meta property="og:title" content="{{ $data->name }} | Quartz Countertop Slab | Argil Tiles">
    <meta property="og:description"
        content="Explore {{ $data->name }} quartz countertop slab from Argil Tiles. Premium engineered quartz manufactured in Morbi, Gujarat, India.">
    <meta property="og:url" content="https://argiltiles.com/quartzinquiry/{{ $data->slug }}">

    <meta name="twitter:title" content="{{ $data->name }} | Quartz Countertop Slab | Argil Tiles">
    <meta name="twitter:description"
        content="Explore {{ $data->name }} quartz countertop slab from Argil Tiles. Premium engineered quartz manufactured in Morbi, Gujarat, India.">

    <link rel="canonical" href="https://argiltiles.com/quartzinquiry/{{ $data->slug }}">

    <title>{{ $data->name }} | Quartz Countertop Slab | Argil Tiles</title>

    @verbatim
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
            "reviewBody": "Impressed with the quality and elegant finish of Argil’s quartz. Smooth texture, excellent durability, and a classy touch to our space. Highly recommended!"
          }
          ]

        }
        </script>
        @endverbatim
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
                    <img src="{{ asset('quartz/' . $data->mainImg) }}"
                        alt="{{ $data->name }} quartz surface"
                        title="{{ $data->name }} quartz surface"
                        class="d-block w-100 img-fluid"
                        style="object-fit: cover; height: 100vh;">
                </div>
            @endif
            @foreach (['subImg1', 'subImg2', 'subImg3', 'subImg4', 'subImg5'] as $index => $img)
                @if ($data->$img)
                    <div class="carousel-item @if (!$data->mainImg && $index == 0) active @endif">
                        <img src="{{ asset('quartz/' . $data->$img) }}"
                            alt="{{ $data->name }} quartz surface image {{ $index + 1 }}"
                            title="{{ $data->name }} quartz surface image {{ $index + 1 }}"
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
                    <h3 class="h4 pt-2">SPACES</h3>
                    <p class="h5 pt-1 mb-1">Primary Color :</p>
                    <p>{{ $data->primarycolors }}</p>
                    <p class="h5 mb-1">Stock :</p>
                    <p>{{ $data->stock }}</p>
                    <p class="h5 mb-1">Book Match :</p>
                    <p>{{ $data->bookmatch }}</p>
                    <p class="h5 mb-1">Available Finish :</p>
                    <p>{{ $data->finishType }}</p>
                    <h3 class="h4 pt-2">SIZES</h3>
                    <p class="h5 pt-1 mb-1">Thickness :</p>
                    <p>{{ $data->thicknesses }}</p>
                    <p class="h5 mb-1">Slab Size :</p>
                    <p>{{ $data->sizes }}</p>
                </div>
            </div>

            <!-- APPLICATIONS box -->
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="border border-1 border-dark p-3 rounded h-100">
                    <h3 class="h4 pt-2">APPLICATIONS</h3>

                    <p class="h5 pt-1 mb-1">Flooring :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p class="h5 mb-1">Counters :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p class="h5 mb-1">Wall :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p class="h5 mb-1">Other :</p>
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
