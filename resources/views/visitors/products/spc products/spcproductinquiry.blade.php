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

    <title> {{ $data->names }} | Premium SPC Flooring Solutions by Argil</title>


    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "{{ $data->names }}",
          "image": ["{{ asset('spc/' . $data->mainImg) }}"],
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
            Thrilled with the SPC flooring from Argil. It has a clean, stylish appearance and feels incredibly sturdy underfoot. It’s transformed our room with a modern touch and is super low-maintenance. Definitely recommend!"
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
                <h1 class="display-6 fw-bold">Home / {{ $data->names }}</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">

        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">SPC Flooring tiles</h2>
            <div class="col-md-4 pt-5">
                {{-- Main Image --}}
                @if ($data->mainImg)
                    <div >
                        <img id="mainImage" src="{{ asset('spc/' . $data->mainImg) }}" class="img-thumbnail mb-3"
                            alt="spc product" title="spc product" loading="lazy">
                    </div>
                @endif

                {{-- Thumbnail Images --}}
                @php
                    $images = [
                        $data->mainImg,
                        $data->subImg1,
                        $data->subImg2,
                        $data->subImg3,
                        $data->subImg4,
                        $data->subImg5,
                    ];
                @endphp

                <!--@foreach ($images as $img)-->
                <!--    @if ($img)-->
                <!--        <img src="{{ asset('spc/' . $img) }}" class="img-thumbnail thumb-img me-2 mb-2"-->
                <!--            style="height: 100px; cursor: pointer;" alt="spc product" title="spc product" loading="lazy"-->
                <!--            onclick="changeMainImage('{{ asset('spc/' . $img) }}')">-->
                <!--    @endif-->
                <!--@endforeach-->
            </div>

            {{-- Script to Change Main Image --}}
            <script>
                function changeMainImage(src) {
                    const mainImg = document.getElementById('mainImage');
                    mainImg.src = src;
                }
            </script>

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
                <h2 class="fw-bold"><i class="bi bi-file-earmark-text"></i> Product Inquiry</h2>

                <form class="mt-3" id="contact-form" method="POST">
                    @csrf
                    {{-- <input type="hidden" name="product_id" value="{{ $data->id }}"> --}}
                    <input type="hidden" name="product_name" value="{{ $data->names }}">
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
                            name="form_phone" required oninvalid="this.setCustomValidity('The contact field is required.')"
                            oninput="this.setCustomValidity('')" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" id="floatingMessage" name="form_message" placeholder="Your Message"
                            style="height: 150px;" required oninvalid="this.setCustomValidity('The message field is required.')"
                            oninput="this.setCustomValidity('')"></textarea>
                    </div>
                    <input type="hidden" name="product_details" value="spc product">
                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
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

            const iti = window.intlTelInputGlobals.getInstance(document.querySelector('#form_phone'));

            // Get full international number
            const fullPhone = iti.getNumber();

            // Remove original form_phone and add formatted one

            const formData = new FormData(form);
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
