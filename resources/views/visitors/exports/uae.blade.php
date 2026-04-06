@extends('layouts.app')

@section('seosection')
    <title>Exports | Argil Tiles – Quartz Stone Manufacturers in Morbi, India</title>
@endsection


@section('content')
    <header class="py-5 bg-dark text-white text-center shadow-lg" style="border-bottom: 15px solid #ccb19b;">
        <div class="container py-5">
            <h6 class="text-uppercase fw-bold mb-3" style="color: #ccb19b; letter-spacing: 5px;">Premium Indian SPC &
                Quartz</h6>
            <h1 class="display-3 fw-bold mb-4 text-uppercase">SPC FLOORING & QUARTZ SURFACE EXPORT <span
                    style="color: #ccb19b;">TO UAE</span>
            </h1>
            <p class="lead mb-5 opacity-75 mx-auto" style="max-width: 850px;">
                Argil Group manufactures and exports high-quality SPC & Vinyl flooring and engineered quartz surfaces
                from India to the World for residential, commercial, and hospitality projects.
            </p>
            <div class="d-flex flex-wrap gap-3 justify-content-center">
                <a href="#tender" class="btn btn-lg rounded-0 px-5 py-3 fw-bold text-white shadow"
                    style="background-color: #ccb19b; border: none;">REQUEST QUOTE</a>
                <a href="/catalogue" class="btn btn-outline-light btn-lg rounded-0 px-5 py-3 fw-bold">PRODUCT CATALOGUE</a>
            </div>
        </div>
    </header>

    <section class="py-5 bg-white border-bottom">
        <div class="container py-4">
            <h2 class="fw-bold text-uppercase mb-4 text-center text-md-start">ABOUT OUR EXPORT OPERATIONS TO UAE</h2>
            <div class="row">
                <div class="col-lg-10">
                    <p class="text-muted lead mb-4">Argil Group provides direct sourcing of flooring and surface
                        materials from India for buyers in the UAE engaged in construction, interior fit-out, and
                        large-scale installations.</p>
                    <p class="fw-bold text-uppercase small mb-2" style="color: #ccb19b; letter-spacing: 1px;">Our export
                        process ensures:</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Confirmed product
                            specifications</li>
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Predictable production
                            and delivery schedules</li>
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Supervised container
                            loading and shipment</li>
                    </ul>
                    <div class="p-4 bg-light border-start border-4 border-dark">
                        <p class="mb-0 small text-dark">Each order follows a controlled workflow — sample approval,
                            production scheduling, quality inspection, and secure container loading — ensuring materials
                            received match confirmed requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-uppercase text-center mb-5 text-dark">WHY CHOOSE ARGIL GROUP FOR UAE PROJECTS</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm"
                        style="transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-gear-wide-connected display-5 mb-4 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold text-uppercase">Direct Manufacturer</h5>
                        <p class="small text-muted mb-0">Full production control ensures specification accuracy and
                            approved sample-based production.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm"
                        style="transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-truck display-5 mb-4 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold text-uppercase">Reliable Dispatch</h5>
                        <p class="small text-muted mb-0">Timelines confirmed to support project schedules with
                            international shipping expertise for UAE.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm"
                        style="transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-chat-left-dots display-5 mb-4 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold text-uppercase">Clear Coordination</h5>
                        <p class="small text-muted mb-0">Structured order coordination and flexible container planning
                            for multiple designs and quantities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-bottom">
        <div class="container py-4">
            <h2 class="fw-bold text-uppercase text-center mb-5">Product Portfolio</h2>

            <div class="row g-5 align-items-center mb-5 pb-5 border-bottom">
                <div class="col-lg-6">
                    <img src="{{ asset('export-imgs/spc1.jpg') }}" class="img-fluid w-50 mx-auto d-block"
                        alt="Argil SPC Flooring">
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h3 class="fw-bold text-uppercase mb-3">SPC & Vinyl Flooring</h3>
                    <p class="text-muted lead mb-4">Modular flooring for UAE projects. 100% waterproof and
                        moisture-resistant core with dimensional stability in warm environments.</p>
                    <div class="row g-3 small fw-bold text-uppercase">
                        <div class="col-6"><i class="bi bi-check2-square text-brown" style="color: #ccb19b;"></i>
                            Thickness: 4mm – 8mm</div>
                        <div class="col-6"><i class="bi bi-check2-square text-brown" style="color: #ccb19b;"></i> Wear
                            Layer: 0.3 – 0.5mm</div>
                        <div class="col-6"><i class="bi bi-check2-square text-brown" style="color: #ccb19b;"></i> Size
                            :181*1220mm , 228*1524mm , 306*612mm, 150*600mm</div>
                        <div class="col-12 mt-3 p-3 bg-light border-start border-brown border-4"
                            style="border-color:#ccb19b !important;">
                            Wood Grain | Stone Texture | Herringbone Finishes | Pantented Locking System
                        </div>
                        <a href="/spcproducts" class="btn w-100 rounded-0 fw-bold py-2 text-white shadow-sm"
                            style="background-color: #ccb19b;">Explore Products</a>
                    </div>
                </div>
            </div>



            <div class="row g-5 align-items-center flex-row-reverse mt-5 pb-5">
                <div class="col-lg-6">
                    <img src="{{ asset('export-imgs/quartz1.jpg') }}" class="img-fluid w-50 mx-auto d-block"
                        alt="Argil SPC Flooring">
                </div>
                <div class="col-lg-6 pe-lg-5 text-lg-end">
                    <h3 class="fw-bold text-uppercase mb-3">Engineered Quartz</h3>
                    <p class="text-muted lead mb-4">Premium architectural surfaces. Non-porous, food-safe, and highly
                        resistant to heat, scratches, and stains.</p>
                    <div class="row g-3 small fw-bold text-uppercase justify-content-lg-end">
                        <div class="col-6"><i class="bi bi-check2-square text-brown" style="color: #ccb19b;"></i> 20mm •
                            30mm Thickness</div>
                        <div class="col-6"><i class="bi bi-check2-square text-brown" style="color: #ccb19b;"></i> Jumbo
                            & Super Jumbo Size
                            Slabs Available</div>
                        <div class="col-12 mt-3 p-3 bg-light border-end border-brown border-4 text-lg-end"
                            style="border-color:#ccb19b !important;">
                            Ideal for Countertops, Vanity Tops & Bulk Projects
                        </div>
                        <a href="/quartzsurface" class="btn w-100 rounded-0 fw-bold py-2 text-white shadow-sm"
                            style="background-color: #ccb19b;">Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container py-5 text-center">
            <h2 class="fw-bold text-uppercase ls-widest mb-5" style="color: #ccb19b;">Packaging & Shipping</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-box-seam h1 mb-3 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold">Export Grade</h5>
                        <p class="small opacity-50 mb-0">Foam layers, reinforced cartons, and ISPM-15 wooden pallets for
                            2-ton static loads.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-globe-americas h1 mb-3 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold">Port to Port</h5>
                        <p class="small opacity-50 mb-0">Mundra / Nhava Sheva (India) to Jebel Ali Port or other major
                            UAE gateways.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-phone-vibrate h1 mb-3 d-block" style="color: #ccb19b;"></i>
                        <h5 class="fw-bold">Real-time Support</h5>
                        <p class="small opacity-50 mb-0">Supervised container loading photos and tracking verification
                            via WhatsApp.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tender" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row g-0 shadow-lg border">
                <div class="col-lg-5 p-5 bg-dark text-white d-flex flex-column justify-content-center"
                    style="border-right: 15px solid #ccb19b;">
                    <h2 class="display-5 fw-bold mb-4 text-uppercase">Direct <span style="color: #ccb19b;">Tender.</span>
                    </h2>
                    <p class="opacity-75 lead mb-5">Professional procurement gateway for Dubai, Abu Dhabi, and Sharjah
                        projects. Direct factory access for volume orders.</p>
                    <div class="mb-2 small fw-bold"><i class="bi bi-geo-alt-fill me-2" style="color: #ccb19b;"></i>
                        Morbi Hub → Jebel
                        Ali</div>
                    <div class="small fw-bold"><i class="bi bi-whatsapp me-2" style="color: #ccb19b;"></i> +91 99255
                        11465</div>
                </div>
                <div class="col-lg-7 p-5 bg-white">
                    <form id="contact-form" class="row g-4" method="post"
                        action="{{ request()->root() }}/exports/mail">
                        @csrf
                        <input type="hidden" name="export_country" value="UAE">
                        <div class="col-md-6">
                            <label class="small fw-bold text-uppercase opacity-50 mb-2"> Name</label>
                            <input type="text" name="form_name"
                                class="form-control rounded-0 border-0 bg-light py-3 shadow-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-uppercase opacity-50 mb-2">Contact</label>
                            <input type="tel" id="form_phone" name="form_phone"
                                class="form-control rounded-0 border-0 bg-light py-3 shadow-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-uppercase opacity-50 mb-2">Email Address</label>
                            <input type="email" name="form_email"
                                class="form-control rounded-0 border-0 bg-light py-3 shadow-none" required>
                        </div>
                        <div class="col-md-6">
                            <label class="small fw-bold text-uppercase opacity-50 mb-2">Product Requirement</label>
                            <select name="category" class="form-select rounded-0 border-0 bg-light py-3 shadow-none"
                                required>
                                <option value="SPC Flooring">SPC / Vinyl Flooring</option>
                                <option value="Quartz Surfaces">Quartz Surface</option>
                                <option value="Both Categories">Both Categories</option>

                            </select>
                        </div>
                        <div class="col-12">
                            <label class="small fw-bold text-uppercase opacity-50 mb-2">Message / Specifications</label>
                            <textarea name="form_message" class="form-control rounded-0 border-0 bg-light py-3 shadow-none" rows="4"
                                placeholder="Enter specific sizes, colors, or requirements..."></textarea>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit"
                                class="btn btn-dark w-100 rounded-0 py-3 fw-bold border-0 text-white shadow-sm"
                                style="background-color: #ccb19b; letter-spacing: 2px;">SEND ENQUIRY</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2 text-dark text-uppercase">FAQs — UAE EXPORT</h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background-color: #ccb19b !important;"></div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqUAE">

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f1">
                                    What products are available for UAE projects?
                                </button>
                            </h2>
                            <div id="f1" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    We supply high-density SPC flooring, architectural Quartz surfaces, and specialized
                                    LVT
                                    solutions tailored for Middle Eastern construction standards.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f2">
                                    What is the minimum order quantity?
                                </button>
                            </h2>
                            <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Orders are typically supplied in Full Container Loads (FCL). However, we offer
                                    flexible
                                    container planning where you can mix multiple SPC designs or Quartz colors within a
                                    single 20ft/40ft container.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f3">
                                    How long is production and shipping to UAE?
                                </button>
                            </h2>
                            <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Production takes 2–4 weeks. Transit to Jebel Ali or Khalifa Port is exceptionally
                                    fast,
                                    typically taking 4–7 days, followed by customs clearance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f4">
                                    Are Argil products heat-resistant for the UAE climate?
                                </button>
                            </h2>
                            <div id="f4" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Yes. Our SPC flooring features a stone-plastic composite rigid core designed to
                                    resist
                                    expansion in high temperatures, while our Quartz surfaces are non-porous and
                                    engineered
                                    for thermal stability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f5">
                                    Does Argil Group provide private labeling (OEM) for UAE brands?
                                </button>
                            </h2>
                            <div id="f5" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Yes. For large-scale distributors in the UAE, we offer custom branding and private
                                    labeling on packaging, subject to minimum volume requirements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f6">
                                    How do Quartz slabs handle high-salinity coastal air?
                                </button>
                            </h2>
                            <div id="f6" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Our Quartz is non-porous and resin-bonded, meaning it does not react to salt air or
                                    humidity. This prevents the pitting or staining often seen in natural stone near
                                    coastal
                                    areas like Dubai Marina.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f7">
                                    What installation system is used for SPC flooring?
                                </button>
                            </h2>
                            <div id="f7" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    We utilize the Uniclic or Valinge click-lock systems. These allow for glueless,
                                    floating
                                    installations, which are ideal for fast-paced fit-outs in commercial UAE spaces.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h2 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#f8">
                                    Do you provide documents for UAE Customs and ESMA?
                                </button>
                            </h2>
                            <div id="f8" class="accordion-collapse collapse" data-bs-parent="#faqUAE">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Absolutely. We provide all necessary Certificates of Origin, commercial invoices,
                                    and
                                    technical data sheets required for ESMA compliance and municipality approvals.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    @verbatim
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What products are available for UAE projects?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We supply high-density SPC flooring, architectural Quartz surfaces, and specialized LVT solutions tailored for Middle Eastern construction standards."
          }
        },
        {
          "@type": "Question",
          "name": "What is the minimum order quantity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Orders are typically supplied in Full Container Loads (FCL). However, we offer flexible container planning where you can mix multiple SPC designs or Quartz colors within a single 20ft/40ft container."
          }
        },
        {
          "@type": "Question",
          "name": "How long is production and shipping to UAE?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Production takes 2–4 weeks. Transit to Jebel Ali or Khalifa Port is exceptionally fast, typically taking 4–7 days, followed by customs clearance."
          }
        },
        {
          "@type": "Question",
          "name": "Are Argil products heat-resistant for the UAE climate?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our SPC flooring features a stone-plastic composite rigid core designed to resist expansion in high temperatures, while our Quartz surfaces are non-porous and engineered for thermal stability."
          }
        },
        {
          "@type": "Question",
          "name": "Does Argil Group provide private labeling (OEM) for UAE brands?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For large-scale distributors in the UAE, we offer custom branding and private labeling on packaging, subject to minimum volume requirements."
          }
        },
        {
          "@type": "Question",
          "name": "How do Quartz slabs handle high-salinity coastal air?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our Quartz is non-porous and resin-bonded, meaning it does not react to salt air or humidity. This prevents the pitting or staining often seen in natural stone near coastal areas like Dubai Marina."
          }
        },
        {
          "@type": "Question",
          "name": "What installation system is used for SPC flooring?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We utilize the Uniclic or Valinge click-lock systems. These allow for glueless, floating installations, which are ideal for fast-paced fit-outs in commercial UAE spaces."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide documents for UAE Customs and ESMA?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Absolutely. We provide all necessary Certificates of Origin, commercial invoices, and technical data sheets required for ESMA compliance and municipality approvals."
          }
        }
      ]
    }
    </script>
    @endverbatim
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('contact-form');
            if (!form) return;

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;

                if (!form.checkValidity()) return;

                submitBtn.innerHTML = "Submitting...";
                submitBtn.disabled = true;

                const formData = new FormData(form);
                const csrfToken = form.querySelector('input[name="_token"]')?.value;

                fetch(form.getAttribute('action'), {
                        method: "POST",
                        credentials: "same-origin",
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(async res => {
                        const contentType = res.headers.get('content-type') || '';
                        const data = contentType.includes('application/json') ? await res.json() :
                            {};
                        if (!res.ok) {
                            throw new Error(data.message || 'Request failed');
                        }
                        return data;
                    })
                    .then(data => {
                        if (data.success) {
                            Swal.fire({
                                title: 'Success',
                                text: 'Message sent successfully!',
                                icon: 'success'
                            });
                            form.reset();
                        } else {
                            throw new Error(data.message || 'Mail not sent');
                        }
                    })
                    .catch((error) => {
                        Swal.fire({
                            title: 'Error',
                            text: error.message || 'Something went wrong!',
                            icon: 'error'
                        });
                    })
                    .finally(() => {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    });
            });
        });
    </script>
@endsection
