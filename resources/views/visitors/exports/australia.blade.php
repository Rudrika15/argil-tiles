@extends('layouts.app')

@section('seosection')
    <meta name="description"
        content="Export rigid-core vinyl and engineered stone from India to Australia. Reliable wholesale supply for AU distributors.">
    <meta name="keywords"
        content="rigid-core vinyl export Australia, engineered stone export Australia, surface exporter India">
    <meta property="og:title" content="Rigid-Core Vinyl & Engineered Stone Export to Australia">
    <meta property="og:description"
        content="Export rigid-core vinyl and engineered stone from India to Australia. Reliable wholesale supply for AU distributors.">
    <meta property="og:url" content="https://argiltiles.com/exports/australia">
    <link rel="canonical" href="https://argiltiles.com/exports/australia">
    <title>Rigid-Core Vinyl & Engineered Stone Export to Australia</title>
@endsection

@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('export-imgs/spc1.jpg') }}" fetchpriority="high">
@endsection

@section('content')
    <section class="text-white py-5 text-center border-bottom border-5 position-relative overflow-hidden"
        style="border-color:#ccb19b!important; 
               background: linear-gradient(rgba(94, 93, 93, 0.85), rgba(0, 0, 0, 0.85)), 
                           url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?q=80&w=2000&auto=format&fit=crop'); 
               background-size: cover; 
               background-position: center; 
               background-attachment: fixed;">

        <div class="container py-5 position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-7 mx-auto">
                    <p class="text-uppercase fw-bold mb-3" style="color:#ccb19b;letter-spacing:3px">
                        Australia Export Division
                    </p>
                    <h1 class="display-4 fw-bold text-uppercase mb-4">
                        Premium Surfaces & Rigid-Core Vinyl <br>
                        Export To <span class="text-brand">Australia</span>
                    </h1>
                    <p class="lead opacity-75 mb-4">
                        Argil Group supplies high-performance architectural surfaces to Australian distributors,
                        retailers, and large-scale builders with reliable direct-to-port logistics.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="#enquiry" class="btn text-white fw-bold px-4 py-3 rounded-0 bg-brand">
                            Request Quote
                        </a>
                        <a href="/catalogue" class="btn btn-outline-light px-4 py-3 rounded-0">
                            Download Catalog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-bottom">
        <div class="container py-4">
            <h2 class="fw-bold text-uppercase mb-4 text-center text-md-start">Export Operations to Australia</h2>
            <div class="row">
                <div class="col-lg-10">
                    <p class="text-muted lead mb-4">
                        Argil Group facilitates seamless direct sourcing of advanced flooring and quartz materials for
                        the Oceania market, ensuring high durability suitable for Australian coastal and inland
                        conditions.
                    </p>
                    <p class="fw-bold text-uppercase small mb-2 text-brand ls-1">
                        Our Australia-Focused Process:
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Technical compliance
                            with AS/NZS building standards</li>
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Optimized logistics
                            via Sydney, Melbourne & Brisbane</li>
                        <li class="mb-2 small"><i class="bi bi-check2-circle me-2 text-dark"></i> Specialized
                            low-maintenance formulations for Australian conditions</li>
                    </ul>
                    <div class="p-4 bg-light border-start border-4 border-dark">
                        <p class="mb-0 small text-dark">
                            We manage a comprehensive workflow from slab/plank inspection to container sealing.
                            Our documentation team ensures all trade certificates meet Australian Border Force
                            and regulatory requirements for bulk import.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-uppercase text-center mb-5 text-dark">The Argil Advantage</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm" style="transition: all 0.4s ease-in-out;"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-shield-check display-5 mb-4 d-block text-brand"></i>
                        <h3 class="fw-bold text-uppercase">Certified Durability</h3>
                        <p class="small text-muted mb-0">Products engineered for high-traffic Australian residential and
                            commercial environments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm" style="transition: all 0.4s ease-in-out;"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-geo-alt display-5 mb-4 d-block text-brand"></i>
                        <h3 class="fw-bold text-uppercase">Coastal Logistics</h3>
                        <p class="small text-muted mb-0">Direct routes from Mundra to major Australian ports, ensuring
                            reduced transit times for bulk orders.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-5 bg-white border rounded-0 h-100 shadow-sm" style="transition: all 0.4s ease-in-out;"
                        onmouseover="this.style.transform='translateY(-15px)'; this.style.borderColor='#ccb19b';"
                        onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='#dee2e6';">
                        <i class="bi bi-box-seam display-5 mb-4 d-block text-brand"></i>
                        <h3 class="fw-bold text-uppercase">Jumbo Quartz</h3>
                        <p class="small text-muted mb-0">Capability to export massive Quartz slabs for modern Australian
                            kitchen islands and bathroom vanities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row mb-5 align-items-end">
                <div class="col-lg-7">
                    <p class="text-uppercase fw-bold ls-2 text-brand">Export
                        Excellence</p>
                    <h2 class="display-5 fw-bold text-dark">Export Specifications</h2>
                </div>
                <div class="col-lg-5 text-lg-end pb-2">
                    <p class="text-muted mb-0 border-start border-md-0 ps-3 ps-md-0 border-brand">
                        Maintaining ISO 9001:2015 standards for major Australian infrastructure and residential
                        projects.
                    </p>
                </div>
            </div>

            <div class="row g-0 shadow-lg rounded overflow-hidden border">
                <div class="col-lg-6 border-end">
                    <div class="p-0 position-relative text-center bg-light">
                        <div class="spacer-100"></div>
                        <img src="{{ asset('export-imgs/spc1.jpg') }}" class="img-fluid w-50 mx-auto d-block"
                            alt="rigid-core vinyl" title="rigid-core vinyl" width="350" height="354" loading="eager" fetchpriority="high" decoding="async">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark text-white px-3 py-2 fw-normal badge-brand-edge">SPC-AU SERIES</span>
                        </div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <h3 class="fw-bold mb-3">Rigid-Core Vinyl</h3>
                        <p class="text-secondary small mb-4">100% waterproof and moisture resistant. Built with a
                            stone-plastic composite core for maximum stability.</p>
                        <table class="table table-sm table-borderless small text-uppercase mb-4">
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Wear Layer</td>
                                <td class="py-2 fw-bold text-end">0.50mm</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Thickness</td>
                                <td class="py-2 fw-bold text-end">4.0mm - 8.0mm</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-muted">Click System</td>
                                <td class="py-2 fw-bold text-end">Valinge / Uniclic</td>
                            </tr>
                        </table>
                        <a href="/spcproducts" class="btn w-100 rounded-0 fw-bold py-2 text-white bg-brand">Explore Products</a>
                    </div>
                </div>
                <div class="col-lg-6 bg-light">
                    <div class="p-0 position-relative text-center bg-white">
                        <div class="spacer-100"></div>
                        <img src="{{ asset('export-imgs/quartz1.jpg') }}" class="img-fluid w-50 mx-auto d-block"
                            alt="Quartz Surface" title="Quartz Surface">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-dark text-white px-3 py-2 fw-normal badge-brand-edge">AU-QUARTZ</span>
                        </div>
                    </div>
                    <div class="p-4 p-xl-5">
                        <h3 class="fw-bold mb-3">Architectural Engineered Stone</h3>
                        <p class="text-secondary small mb-4">Composed of about 93% natural mineral. Highly non-porous and
                            scratch resistant for premium Australian applications.</p>
                        <table class="table table-sm table-borderless small text-uppercase mb-4">
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Size</td>
                                <td class="py-2 fw-bold text-end">3200 x 1600 mm</td>
                            </tr>
                            <tr class="border-bottom">
                                <td class="py-2 text-muted">Thickness</td>
                                <td class="py-2 fw-bold text-end">20mm - 30mm</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-muted">Polish</td>
                                <td class="py-2 fw-bold text-end">Premium High-Gloss</td>
                            </tr>
                        </table>
                        <a href="/quartzsurface" class="btn w-100 rounded-0 fw-bold py-2 text-white shadow-sm bg-brand">Explore Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container py-5 text-center">
            <h2 class="fw-bold text-uppercase ls-widest mb-5 text-brand">Packaging & Shipping</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-box-seam h1 mb-3 d-block text-brand"></i>
                        <h3 class="fw-bold">Export Grade</h3>
                        <p class="small opacity-50 mb-0">Reinforced cartons and ISPM-15 heat-treated wooden pallets for
                            safe long-haul transit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-globe-americas h1 mb-3 d-block text-brand"></i>
                        <h3 class="fw-bold">Oceania Routes</h3>
                        <p class="small opacity-50 mb-0">Direct shipping from Mundra (India) to Sydney, Melbourne,
                            Adelaide, or Brisbane ports.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border border-secondary h-100 rounded-0 shadow-sm" style="transition: 0.3s;"
                        onmouseover="this.style.borderColor='#ccb19b'; this.style.transform='translateY(-10px)'"
                        onmouseout="this.style.borderColor='#6c757d'; this.style.transform='translateY(0)'">
                        <i class="bi bi-phone-vibrate h1 mb-3 d-block text-brand"></i>
                        <h3 class="fw-bold">Digital Support</h3>
                        <p class="small opacity-50 mb-0">Loading supervision and tracking updates available via WhatsApp
                            for complete transparency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="export-stats" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-uppercase text-center mb-5">Global Export Network</h2>
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <p class="display-5 fw-bold text-brand"><span class="counter" data-target="50">0</span>+
                    </p>
                    <p class="text-muted small text-uppercase fw-bold">Nations Exported</p>
                </div>
                <div class="col-md-3">
                    <p class="display-5 fw-bold text-brand"><span class="counter"
                            data-target="250">0</span>+</p>
                    <p class="text-muted small text-uppercase fw-bold">Satisfied Partners</p>
                </div>
                <div class="col-md-3">
                    <p class="display-5 fw-bold text-brand"><span class="counter"
                            data-target="600">0</span>+</p>
                    <p class="text-muted small text-uppercase fw-bold">Containers Shipped</p>
                </div>
                <div class="col-md-3">
                    <p class="display-5 fw-bold text-brand"><span class="counter" data-target="15">0</span>+
                    </p>
                    <p class="text-muted small text-uppercase fw-bold">Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <section id="enquiry" class="py-5 text-white shadow-lg export-quote-banner">

        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <h2 class="fw-bold text-uppercase mb-4">Australia Import Desk</h2>
                    <p class="opacity-75 mb-4">Direct sourcing solutions for Australian business owners. Our dedicated
                        export team assists with volume pricing, logistics, and AS/NZS compliance.</p>
                    <p class="fw-bold h5"><i class="bi bi-whatsapp me-2 text-brand"></i> +91 99255 11465</p>
                </div>

                <div class="col-lg-7">
                    <form id="contact-form" class="row g-3" method="post"
                        action="{{ request()->root() }}/exports/mail">
                        @csrf
                        <input type="hidden" name="export_country" value="Australia">
                        <div class="col-md-6"><input type="text" name="form_name"
                                class="form-control rounded-0 border-0 shadow-none py-3 text-dark bg-white"
                                placeholder="Business Name" required></div>
                        <div class="col-md-6"><input type="email" name="form_email"
                                class="form-control rounded-0 border-0 shadow-none py-3 text-dark bg-white"
                                placeholder="Email Address" required></div>
                        <div class="col-md-6"><input type="tel" id="form_phone" name="form_phone"
                                class="form-control rounded-0 border-0 shadow-none py-3 text-dark bg-white"
                                placeholder="Contact No" required></div>
                        <div class="col-md-6">
                            <select name="category"
                                class="form-select rounded-0 border-0 shadow-none py-3 text-dark bg-white" required>
                                <option selected disabled>Select Product</option>
                                <option value="rigid-core vinyl">rigid-core vinyl</option>
                                <option value="engineered stone">engineered stone</option>
                                <option value="Both Categories">Both Categories</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea name="form_message" class="form-control rounded-0 border-0 shadow-none py-3 text-dark bg-white"
                                rows="4" placeholder="Request Details"></textarea>
                        </div>
                        <div class="col-12"><button type="submit"
                                class="btn text-white fw-bold w-100 py-3 rounded-0 border-0 bg-brand">SUBMIT ENQUIRY</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-2 text-dark">FAQs — AUSTRALIA EXPORT</h2>
                <div class="mx-auto divider-brand"></div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="faqAustralia">

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au1">
                                    What is the standard delivery time to Australia?
                                </button>
                            </h3>
                            <div id="au1" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Production typically takes 3–4 weeks. Shipping transit time to major ports like
                                    **Sydney, Melbourne, or Brisbane** ranges from 18–25 days, making Argil Group a
                                    reliable
                                    partner for time-sensitive Australian projects.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au2">
                                    Are Argil products compliant with Australian Building Standards?
                                </button>
                            </h3>
                            <div id="au2" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Yes. Our rigid-core range and engineered stone are manufactured to meet **AS/NZS standards**. We
                                    provide technical test reports for slip resistance (P-ratings) and fire safety,
                                    which
                                    are critical for NCC (National Construction Code) compliance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au3">
                                    How is the packaging handled for Australian Biosecurity?
                                </button>
                            </h3>
                            <div id="au3" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    We strictly adhere to Australian biosecurity regulations. All wooden pallets used
                                    are
                                    **ISPM-15 certified** (heat-treated) and accompanied by the necessary fumigation
                                    certificates to ensure smooth clearance by the Department of Agriculture, Fisheries
                                    and
                                    Forestry.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au4">
                                    Can I mix different SPC designs in one container?
                                </button>
                            </h3>
                            <div id="au4" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Absolutely. We understand the need for variety in Australian showrooms. You can mix
                                    various SPC decors or Quartz slab colors within a single 20ft or 40ft container to
                                    optimize your inventory.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au5">
                                    Does Argil provide Jumbo Quartz slabs for Australian kitchen islands?
                                </button>
                            </h3>
                            <div id="au5" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Yes, we specialize in **Jumbo Slabs (3200 x 1600 mm)**. These are highly preferred
                                    by
                                    Australian fabricators for creating seamless, large-scale waterfall kitchen islands
                                    and
                                    premium countertops.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-0 mb-3 overflow-hidden shadow-sm">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed fw-bold text-uppercase small bg-white text-dark shadow-none"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#au6">
                                    What is the wear rating of your rigid-core vinyl for Australian commercial use?
                                </button>
                            </h3>
                            <div id="au6" class="accordion-collapse collapse" data-bs-parent="#faqAustralia">
                                <div class="accordion-body small text-muted bg-white border-top">
                                    Our rigid-core range flooring comes with a high-performance 0.5mm (20 mil) wear layer, making it
                                    suitable for heavy-duty commercial applications, including retail stores, offices,
                                    and
                                    multi-residential developments in Australia.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @verbatim
        <script>
            let started = false;

            function startCounter() {
                if (started) return;
                const section = document.getElementById("export-stats");
                const position = section.getBoundingClientRect().top;
                const screenPosition = window.innerHeight;
                if (position < screenPosition) {
                    started = true;
                    const counters = document.querySelectorAll(".counter");
                    counters.forEach(counter => {
                        let target = +counter.getAttribute("data-target");
                        let count = 0;
                        let speed = target / 100;

                        function update() {
                            count += speed;
                            if (count < target) {
                                counter.innerText = Math.ceil(count);
                                requestAnimationFrame(update);
                            } else {
                                counter.innerText = target;
                            }
                        }
                        update();
                    });
                }
            }
            window.addEventListener("scroll", startCounter);
        </script>

    @endverbatim
    @verbatim

        <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the standard delivery time to Australia?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Production typically takes 3–4 weeks. Shipping transit time to major ports like Sydney, Melbourne, or Brisbane ranges from 18–25 days, making Argil Group a reliable partner for time-sensitive Australian projects."
      }
    },
    {
      "@type": "Question",
      "name": "Are Argil products compliant with Australian Building Standards?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Our rigid-core range and engineered stone are manufactured to meet AS/NZS standards. We provide technical test reports for slip resistance (P-ratings) and fire safety, which are critical for NCC (National Construction Code) compliance."
      }
    },
    {
      "@type": "Question",
      "name": "How is the packaging handled for Australian Biosecurity?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We strictly adhere to Australian biosecurity regulations. All wooden pallets used are ISPM-15 certified (heat-treated) and accompanied by the necessary fumigation certificates to ensure smooth clearance by the Department of Agriculture, Fisheries and Forestry."
      }
    },
    {
      "@type": "Question",
      "name": "Can I mix different SPC designs in one container?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We understand the need for variety in Australian showrooms. You can mix various SPC decors or Quartz slab colors within a single 20ft or 40ft container to optimize your inventory."
      }
    },
    {
      "@type": "Question",
      "name": "Does Argil provide Jumbo Quartz slabs for Australian kitchen islands?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, we specialize in Jumbo Slabs (3200 x 1600 mm). These are highly preferred by Australian fabricators for creating seamless, large-scale waterfall kitchen islands and premium countertops."
      }
    },
    {
      "@type": "Question",
      "name": "What is the wear rating of your rigid-core vinyl for Australian commercial use?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our rigid-core range flooring comes with a high-performance 0.5mm (20 mil) wear layer, making it suitable for heavy-duty commercial applications, including retail stores, offices, and multi-residential developments in Australia."
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
