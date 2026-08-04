@extends('layouts.app')
@section('seosection')
@php
    $qiName = \App\Support\SeoCopy::soften($data->name);
@endphp
    <meta name="description"
        content="Explore {{ $qiName }} engineered stone from our Morbi factory. Premium slabs for homes and commercial projects.">
    <meta name="keywords" content="{{ $qiName }}, engineered stone slabs, kitchen surfaces, Morbi manufacturer">
    <meta property="og:title" content="{{ $qiName }} | Engineered Stone">
    <meta property="og:description"
        content="Explore {{ $qiName }} engineered stone. Premium slabs manufactured in Morbi, Gujarat.">
    <meta property="og:url" content="https://argiltiles.com/quartzinquiry/{{ $data->slug }}">

    <meta name="twitter:title" content="{{ $qiName }} | Engineered Stone">
    <meta name="twitter:description"
        content="Explore {{ $qiName }} engineered stone. Premium slabs manufactured in Morbi, Gujarat.">

    <link rel="canonical" href="https://argiltiles.com/quartzinquiry/{{ $data->slug }}">

    <title>{{ $qiName }} | Engineered Stone</title>

<script type="application/ld+json">
{
    "@@context":"https://schema.org",
    "@@type":"Product",
    "@@id":"https://argiltiles.com/quartzinquiry/{{ $data->slug }}#product",
    "name":{{ json_encode($data->name) }},
    "image":[
        "{{ asset('quartz/' . $data->mainImg) }}"
    ],
    "description":{{ json_encode(trim('Thickness: ' . ($data->thicknesses ?? '') . ', Primary color: ' . ($data->primarycolors ?? '') . ', Finish: ' . ($data->finishType ?? ''))) }},
    "sku":"{{ $data->slug ?? $data->id }}",
    "brand":{
        "@@type":"Brand",
        "name":"Argil Tiles"
    },
    "manufacturer":{
        "@@type":"Organization",
        "name":"Mod Ceramic Industries Ltd."
    },
    "category":"Engineered Stone",
    "url":"https://argiltiles.com/quartzinquiry/{{ $data->slug }}"
}
</script>
@endsection
@section('intl_tel', '1')
@section('lcp_preload')
    @if(!empty($data->mainImg))
        <link rel="preload" as="image" href="{{ asset('quartz/' . $data->mainImg) }}" fetchpriority="high">
    @endif
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
                        style="object-fit: cover; height: 100vh;" loading="eager" fetchpriority="high" decoding="async">
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
                    <h3 class="pt-2">SPACES</h3>
                    <p class="pt-1">Primary Color :</p>
                    <p>{{ $data->primarycolors }}</p>
                    <p>Stock :</p>
                    <p>{{ $data->stock }}</p>
                    <p>Book Match :</p>
                    <p>{{ $data->bookmatch }}</p>
                    <p>Available Finish :</p>
                    <p>{{ $data->finishType }}</p>
                    <h3 class="pt-2">SIZES</h3>
                    <p class="pt-1">Thickness :</p>
                    <p>{{ $data->thicknesses }}</p>
                    <p>Slab Size :</p>
                    <p>{{ $data->sizes }}</p>
                </div>
            </div>

            <!-- APPLICATIONS box -->
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="border border-1 border-dark p-3 rounded h-100">
                    <h3 class="pt-2">APPLICATIONS</h3>

                    <p class="pt-1">Flooring :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p>Counters :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p>Wall :</p>
                    <p>Residential <i class="bi bi-check-lg text-success"></i></p>
                    <p>Commercial <i class="bi bi-check-lg text-success"></i></p>

                    <p>Other :</p>
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
        document.addEventListener('DOMContentLoaded', function() {
            const input = document.querySelector("#form_phone");
            if (input && window.intlTelInput) {
                window.intlTelInput(input, {
                    initialCountry: "in",
                    separateDialCode: true,
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
                });
            }
        });
    </script>
@endsection
