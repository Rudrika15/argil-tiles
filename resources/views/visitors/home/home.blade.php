    @extends('layouts.app')
    @section('seosection')
        <meta name="description"
            content="We manufacture premium engineered stone slabs and rigid-core vinyl in Morbi, Gujarat. ISO-certified. Explore 50+ designs. Request a quote.">

        <meta name="keywords"
            content="engineered stone, rigid-core vinyl, surface manufacturer, Morbi">

        <meta property="og:title" content="Engineered Surfaces & Rigid-Core Vinyl | Morbi">
        <meta property="og:url" content="https://argiltiles.com/">
        <meta property="og:description"
            content="Premium engineered stone slabs and rigid-core vinyl from Morbi, Gujarat. ISO-certified quality with 10+ years of expertise.">
        <meta name="twitter:title" content="Engineered Surfaces & Rigid-Core Vinyl | Morbi">
        <meta name="twitter:description"
            content="Premium engineered stone slabs and rigid-core vinyl from Morbi, Gujarat. ISO-certified quality with 10+ years of expertise.">
        <link rel="canonical" href="https://argiltiles.com/">

        <title>Engineered Surfaces & Rigid-Core Vinyl Manufacturer | Morbi</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/home-about.png') }}" fetchpriority="high">
@endsection
    @section('content')
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-12">
                    <video autoplay muted loop playsinline class="home-hero-video">
                        <source src="{{ asset('assets/asset/mainvideo.mp4') }}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-5">
                    <h1 class="fw-bold">Surfaces Built for Modern Interiors</h1>
                    <p>Where we have travelled from Tradition to technology, we feel the journey is growing longer
                        and better with every passing day.
                    </p>
                    <p>
                        We have always respected our traditions and culture and have whole heartedly embraced technology to
                        take us forward without any exceptions. May this journey be never ending and always challenging us
                        to soar greater height of success and achievement.</p>
                    <p class="text-muted">
                        From engineered stone slabs for kitchens and commercial counters to waterproof rigid-core vinyl for
                        modern floors, our Morbi facility supports architects, distributors, and homeowners with consistent
                        quality, documented processes, and export-ready logistics.
                    </p>
                </div>
                <div class="col-md-4 pt-5">
                    <img src="{{ asset('assets/asset/home-about.png') }}" class="img-fluid" alt="about our company"
                        title="About our company" width="573" height="209" loading="eager" fetchpriority="high" decoding="async" />
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-12">
                    <p>The management has always accomplished the big goals set out by us together. Unarguably,
                        they have done it with ethics and moral of our community. Throughout their journey they have upheld
                        the principles of sharing the growth with all stakeholders, leaving faces smiling and hearts warm
                        with affection and respect for the brand.

                        I would like to congratulate you on the same and motivate you to always be this humble and serving
                        to your brand and people associated.
                    </p>

        <!-- Explore More Section -->
        <p class="fw-bold mt-4 mb-3">Explore More</p>
        <div class="row g-3">

            <div class="col-md-4">
                <a href="/about-argil" class="resource-card">
                    About Us
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/who-is-argil" class="resource-card">
                    Who We Are
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
{{-- 
            <div class="col-md-4">
                <a href="/projects" class="resource-card">
                    Projects
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div> --}}

            <div class="col-md-4">
                <a href="/case-studies" class="resource-card">
                    Case Studies
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/testimonial" class="resource-card">
                    Testimonials
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

             <div class="col-md-4">
               <a href="/contact-argil" class="resource-card ">
            Contact Us
            <i class="bi bi-arrow-right"></i>
        </a>
            </div>

        </div>
                </div>
            </div>
            
        </div>

        <!-- Why Choose Us -->
        @include('visitors.comanfile.certificate')
        <!-- Why Choose Us -->
        {{-- <section class="testimonial-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Clients Say</h2>
            <p class="text-muted">
                Trusted by architects, builders, interior designers, and project developers.
            </p>
        </div>

        <div class="row">

            @foreach($testimonials as $testimonial)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card h-100">

    <div class="card-body">

        <div class="testimonial-rating">
            @for($i = 1; $i <= $testimonial->rating; $i++)
                <i class="bi bi-star-fill"></i>
            @endfor
        </div>

        <p class="testimonial-text">
            "{{ Str::limit($testimonial->testimonial, 180) }}"
        </p>

        <div class="d-flex align-items-center mt-4">

            @if($testimonial->client_image)
                <img src="{{ asset($testimonial->client_image) }}"
                     class="client-image me-3"
                     alt="{{ $testimonial->client_name }}">
            @endif

            <div>
                <div class="client-name">
                    {{ $testimonial->client_name }}
                </div>

                @if($testimonial->designation)
                    <div class="client-designation">
                        {{ $testimonial->designation }}
                    </div>
                @endif

                @if($testimonial->company_name)
                    <div class="client-company">
                        {{ $testimonial->company_name }}
                    </div>
                @endif
            </div>

        </div>

    </div>

</div>
            </div>

            @endforeach

        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/testimonials') }}" class="btn-primary fw-bold text-decoration-none">
                View All Testimonials
            </a>
        </div>

    </div> 
</section> --}}


       
        <!-- Product Section -->
        <div class="container">
            <div class="row pt-5">
                <h2 class="text-center fw-bold">Engineered Surfaces for Homes &amp; Commercial Spaces</h2>
            </div>
            <div class="row pt-5">

                <div class="col-md-4">
                    <img src="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" alt="engineered stone product"
                        title="Engineered stone product" loading="lazy" class="img-fluid">
                </div>
                <div class="col-md-8 ">
                    <h3>Engineered Stone Slabs</h3>

                    <p class="text-justify">Composite stone is a dense surface material that looks and performs much like
                        natural granite. It resists stains, scratches, and cracking, and handles everyday heat and cold well.
                        Indian makers blend mineral aggregates with resins and pigments to create these man-made slabs—typically
                        about 90% pulverised natural mineral and 10% polyresin, with slight variation by grade. The result is a
                        consistent, durable finish for kitchens, platforms, and commercial interiors.</p>
                    <p>
                        <a href="/quartzsurface" class="btn-primary fw-bold text-decoration-none"> Explore Collection <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <div class="quartz-links mt-4 ">

                        <p class="fw-bold mb-3">Explore More</p>

                        <div class="row g-3">
                        
                            <div class="col-md-4">
                                <a href="/quartz-slab-manufacturer-india" class="resource-card">
                                    <span>Slabs from India</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                            <!-- <div class="col-md-4">
                                <a href="/quartz-slab-manufacturer-morbi" class="resource-card">
                                    <span>Quartz Slab Manufacturer Morbi</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div> -->
                        
                            <div class="col-md-4">
                                <a href="/quartz-surface-exporter-india" class="resource-card">
                                    <span>Surface Exports</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-8">
                    <h3>Rigid-Core Vinyl Tiles</h3>
                    <p class="text-justify">Stone Plastic Composite (rigid-core vinyl) is a durable floor covering made from
                        limestone powder, PVC, and stabilizers. <span id="products">It</span> is highly water-resistant, so it
                        suits kitchens, bathrooms, and other damp areas. The solid core resists dents and scratches in busy
                        spaces, while a click-lock system allows glue-free installation. Layers typically include a wear coat,
                        decorative film, rigid core, and underlayment for quieter steps and comfort. Many designs echo wood or
                        natural stone, and day-to-day care stays simple for homes and workplaces alike.</p>
                    <p>
                        <a href="/spcproducts" class="btn-primary fw-bold text-decoration-none"> Explore Collection <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <p class="fw-bold mb-3">Explore More</p>

<div class="row g-2 mt-3 mb-3">

    <div class="col-md-4">
        <a href="/spc-flooring-manufacturer-india" class="resource-card">
            Made in India
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
<!-- 
    <div class="col-md-4">
        <a href="/spc-flooring-manufacturer-gujarat" class="resource-card">
            SPC Flooring Manufacturer Gujarat
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="col-md-4">
        <a href="/spc-flooring-manufacturer-morbi" class="resource-card">
            SPC Flooring Manufacturer Morbi
            <i class="bi bi-arrow-right"></i>
        </a>
    </div> -->

    <div class="col-md-4">
        <a href="/spc-flooring-exporter-india" class="resource-card">
            Export Options
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <!-- <div class="col-md-4">
        <a href="/rigid-core-spc-flooring" class="resource-card">
            Rigid Core SPC Flooring
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="col-md-4">
        <a href="/luxury-vinyl-flooring-manufacturer" class="resource-card">
            Luxury Vinyl Flooring Manufacturer
            <i class="bi bi-arrow-right"></i>
        </a>
    </div> -->

</div>
                </div>
                <div class="col-md-3 offset-md-1">

                    <img src="{{ asset('asset/images/argileimage/spc1.jpg') }}" alt="rigid-core vinyl product"
                        title="Rigid-core vinyl product" loading="lazy" class="img-fluid text-right">
                </div>
                
            </div>
        </div>
        

        <!-- Usability Section -->
        @include('visitors.comanfile.usablity')
        <!-- Usability Section -->

         {{-- testimonial --}}
         @include('visitors.testimonial')

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "item": {
                "@@id": "https://argiltiles.com/",
                "name": "Home"
            }
        }
        @if(isset($breadcrumb))
            @foreach($breadcrumb as $index => $crumb)
            ,
            {
                "@@type": "ListItem",
                "position": {{ $index + 2 }},
                "item": {
                    "@@id": "{{ $crumb['url'] }}",
                    "name": "{{ $crumb['name'] }}"
                }
            }
            @endforeach
        @endif
    ]
}
</script>
    @endsection