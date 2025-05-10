@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Contact Argil Tiles for inquiries about
quartz slabs, pricing, and orders. Our team is ready to assist you with top-
quality artificial quartz." />
    <meta name="keywords" content="Contact Argil, Quartz Tiles Contact,
Argil Support, Argil Inquiry" />
    <meta property="og:title" content="Get in Touch with Argil Group – Contact Us
Today">
    <meta property="og:description"
        content="Have questions or need
assistance? Contact Argil Group for inquiries about our premium artificial
quartz stone slabs. We are here to help!">
    <meta property="og:url" content="https://argiltiles.com/contact">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Get in Touch with Argil Group – Contact Us
Today">
    <meta name="twitter:description"
        content="Need help? Contact Argil Group for
inquiries about our premium artificial quartz stone slabs. Our team is ready to
assist you!">

    <meta name="twitter:site" content="@ArgilGroup">
    <link rel="canonical" href="https://argiltiles.com/contact" data-react- helmet="true">
    <title>Contact Us | Argil Tiles – Quartz Stone Manufacturers in Morbi, India</title>
@endsection


@section('content')
    {{-- @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif --}}


    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Contact</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">

                <img src="{{ asset('assets/asset/contactsimage.png') }}" alt="argil contact" title="argil contact"
                    loading="lazy" class="img-fluid h-100">
            </div>
            <div class="col-md-6 pt-5">
                <h2 class="fw-bold">Let's Be in Touch !!!
                </h2>
                <form method="POST" id="contact-form">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" name="form_name"
                            placeholder="Your Name" required
                            oninvalid="this.setCustomValidity('The name field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="form_email"
                            placeholder="name@example.com" required
                            oninvalid="this.setCustomValidity('The email field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" id="form_phone" name="form_phone" class="form-control" maxlength="10"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);"
                            title="Enter a valid phone number" placeholder="Contact Number" required
                            oninvalid="this.setCustomValidity('The contact field is required.')"
                            oninput="this.setCustomValidity('')">
                    </div>


                    <div class=" mb-3">
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message" name="form_message"
                            style="height: 150px;" required oninvalid="this.setCustomValidity('The message field is required.')"
                            oninput="this.setCustomValidity('')"></textarea>
                        {{-- <label for="floatingMessage">Your Message</label> --}}
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>


            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6099585746833!2d70.8608067753077!3d22.816912179318518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39598c54ff1c773b%3A0x8d065e671b879a69!2sARGIL%20GROUP%20-%20DISPLAY%20CENTER!5e0!3m2!1sen!2sin!4v1745670064322!5m2!1sen!2sin"
                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>


    <!-- country JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            if (!form.checkValidity()) return;

            submitBtn.innerHTML = "Submitting...";
            submitBtn.disabled = true;

            const formData = new FormData(form);

            // Get intlTelInput instance
            const iti = window.intlTelInputGlobals.getInstance(document.querySelector('#form_phone'));

            // Get full international number
            const fullPhone = iti.getNumber();

            // Remove original form_phone and add formatted one
            formData.delete('form_phone');
            formData.append('form_phone', fullPhone);

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

                        form.reset();
                    }
                })
                .finally(() => {
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
