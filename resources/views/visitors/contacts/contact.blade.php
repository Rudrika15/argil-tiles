@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Contact our Morbi team for slab pricing, sample requests, distributor partnerships, and export shipment questions." />
    <meta name="keywords" content="contact surface manufacturer, slab inquiry, export support, Morbi factory contact" />
    <meta property="og:title" content="Contact Us | Surface & Vinyl Manufacturer">
    <meta property="og:description"
        content="Have questions or need assistance? Reach our team for engineered stone and rigid-core vinyl project support.">
    <meta property="og:url" content="https://argiltiles.com/contact-argil">
    <meta property="og:type" content="website">
    <meta name="twitter:title" content="Contact Us | Surface & Vinyl Manufacturer">
    <meta name="twitter:description"
        content="Need help with engineered stone or rigid-core vinyl? Our team is ready to assist.">

    <meta name="twitter:site" content="@ArgilGroup">
    <link rel="canonical" href="https://argiltiles.com/contact-argil">
    <title>Contact Us | Surface Manufacturer in Morbi, India</title>
@endsection
@section('intl_tel', '1')
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/contactsimage.png') }}" fetchpriority="high">
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

    <div class="container py-4">
        <div class="row mb-4">
            <div class="col-lg-10 mx-auto">
                <p class="lead mb-3">
                    Reach our team for quotes, product details, and project support on engineered stone slabs and rigid-core vinyl.
                </p>
                <p class="text-muted mb-3">
                    Whether you are an architect, interior designer, distributor, or homeowner, our Morbi-based team can help with
                    design selection, slab sizes, export inquiries, and order timelines. Share your requirements below and we will
                    respond with the right product guidance for kitchens, bathrooms, commercial floors, and large-scale projects.
                    Include preferred finishes, approximate square metres, and destination city or port so we can prepare accurate
                    pricing and lead-time guidance.
                </p>
                <p class="text-muted mb-0">
                    Visiting Gujarat? Schedule a showroom appointment to view slab samples and rigid-core décors in person.
                    Remote buyers can request digital boards, catalogue PDFs, and WhatsApp support for faster shortlisting.
                    Our goal is clear communication from first inquiry through dispatch. Typical response windows are within
                    one business day for standard product questions and slightly longer when custom sizes, OEM labeling, or
                    multi-container export schedules are involved.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">

                <img src="{{ asset('assets/asset/contactsimage.png') }}" alt="contact showroom" title="Contact us"
                    width="521" height="521" loading="eager" fetchpriority="high" decoding="async" class="img-fluid">
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

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6">
                <h2 class="h4 fw-bold mb-3">Visit Our Display Center</h2>
                <p class="mb-2">
                    Our Display Center, National Highway 8A, Anand Nagar, Morbi, Gujarat 363642, India.
                </p>
                <p class="mb-2">
                    Phone: <a href="tel:+912822240628" class="text-decoration-none text-dark">02822 240 628</a>
                </p>
                <p class="mb-0 text-muted">
                    Business hours: Monday to Friday, 8:00 AM to 8:00 PM IST. Use the form above for slab pricing,
                    sample requests, distributor partnerships, and export shipment questions.
                </p>
            </div>
            <div class="col-md-6">
                <h2 class="h4 fw-bold mb-3">How We Can Help</h2>
                <p class="mb-2">
                    Request quotations for kitchen platforms, vanity tops, countertops, and rigid-core vinyl for homes or commercial spaces.
                </p>
                <p class="mb-0 text-muted">
                    Share project location, quantity, preferred finish, and timeline so our team can recommend suitable
                    designs and confirm availability for domestic or international delivery. For urgent site requirements,
                    include a phone number and preferred call window so we can prioritise sample dispatch and quotation
                    follow-up.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <p class="text-center text-muted mb-0">
            Prefer social proof before you enquire? Read full client reviews on our
            <a href="/testimonial">testimonials page</a>, then return here to request pricing, samples, or export support
            from our Morbi team.
        </p>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.6099585746833!2d70.8608067753077!3d22.816912179318518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39598c54ff1c773b%3A0x8d065e671b879a69!2sARGIL%20GROUP%20-%20DISPLAY%20CENTER!5e0!3m2!1sen!2sin!4v1745670064322!5m2!1sen!2sin"
                    width="100%" height="550" class="contact-map" allowfullscreen="" loading="lazy"
                    title="Display center map in Morbi, Gujarat"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p class="text-center text-muted mt-3">
                    Find our National Highway display center in Morbi on the map above. Call ahead for sample viewing
                    appointments and directions from Rajkot or Ahmedabad. Parking is available near the showroom for trade
                    visitors bringing drawings or material boards.                     We look forward to helping you specify the right surface for kitchens, baths, and commercial floors.
                </p>
            </div>
        </div>
    </div>

    


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

            const contactForm = document.getElementById('contact-form');
            if (!contactForm) return;

            contactForm.addEventListener('submit', function(event) {
                event.preventDefault();

                const form = this;
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                if (!form.checkValidity()) return;

                submitBtn.innerHTML = "Submitting...";
                submitBtn.disabled = true;

                const formData = new FormData(form);
                const iti = window.intlTelInputGlobals.getInstance(document.querySelector('#form_phone'));
                const fullPhone = iti.getNumber();

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
        });
    </script>

<script type="application/ld+json">
{
    "@@context":"https://schema.org",
    "@@type":"ContactPage",
    "name":"Contact Our Team",
    "url":"https://argiltiles.com/contact-argil"
}
</script>
@endsection
