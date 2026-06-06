@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Premium quartz stone slabs for
countertops & kitchen platforms. Manufactured in Morbi, Gujarat, India.
Explore our high-quality designs at Argil." />
    <meta name="keywords"
        content="Quartz Slabs, Quartz Countertops,
Kitchen Surfaces, Argil Tiles, Quartz Stone Manufacturers, Morbi Gujarat" />
    <meta name="author" content="Argil Group – Leading Manufacturer of
Premium Quartz Surfaces">
    <meta property="og:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet
="true">
    <meta property="og:url" content="https://argiltiles.com/quartzsurface" data-react-helmet="true">
    <meta property="og:description"
        content="Argil is a quartz surface stone slab
for kitchen platform countertops manufacturers in Morbi, Gujarat, India. We have
 the best engineered  quartz surface stone for kitchen and platform  at a
 reasonable price We have 10+ yrs of service. Get a price quote "
        data-react- helmet="true">
    <meta name="twitter:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet="true">
    <meta name="twitter:description"
        content="Argil is a quartz surface stone
slab for kitchen platform countertops manufacturers in Morbi, Gujarat, India. We
 have the best engineered  quartz surface stone for kitchen and platform  at a
reasonable price We have 10+ yrs of service. Get a price quote  "
        data-react-helmet="true">
    <link rel="canonical" href="https://argiltiles.com/quartzsurface" data-react- helmet="true">
    <title>
        Quartz Countertop Slabs Manufacturer in Morbi | Argil
    </title>
@endsection
@section('content')
{{--     
@foreach($faqs as $faq)
    <div class="accordion-item bg-white">
        <h3>{{ $faq->question }}</h3>
        <p>{{ $faq->answer }}</p>
    </div>
@endforeach --}}

  <div class="container my-5">
    <h2 class="text-center mb-4 fw-bold">FAQs</h2>

    <div class="accordion" id="accordionExample">

        @foreach ($faqs as $faq)
            @php
                $id = $loop->index;
            @endphp

            <div class="accordion-item bg-white">

                <h2 class="accordion-header" id="heading{{ $id }}">
                    <button class="accordion-button collapsed bg-white text-dark"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $id }}"
                        aria-expanded="false"
                        aria-controls="collapse{{ $id }}">
                        {{ $faq->question }}
                    </button>
                </h2>

                <div id="collapse{{ $id }}"
                    class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $id }}"
                    data-bs-parent="#accordionExample">

                    <div class="accordion-body bg-white text-dark">
                        {{ $faq->answer }}
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</div>
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

            fetch("{{ Route('send.mail') }}", {
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
                            text: 'Your message has been sent successfully!',
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
