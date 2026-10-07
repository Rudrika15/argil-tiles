    @extends('layouts.app')
    @section('seosection')
        <meta name="description"
            content="Argil Tiles makes engineered slabs and rigid-core vinyl in Morbi, Gujarat. ISO-certified quality. Explore designs and request a quote.">

        <meta name="keywords"
            content="Argil Tiles, engineered slabs, rigid-core vinyl, Morbi">

        <meta property="og:title" content="Argil Tiles | Engineered Surfaces from Morbi">
        <meta property="og:url" content="https://argiltiles.com/">
        <meta property="og:description"
            content="Engineered slabs and rigid-core vinyl from Morbi, Gujarat. ISO-certified quality with a wide design range.">
        <meta name="twitter:title" content="Argil Tiles | Engineered Surfaces from Morbi">
        <meta name="twitter:description"
            content="Engineered slabs and rigid-core vinyl from Morbi, Gujarat. ISO-certified quality with a wide design range.">
        <link rel="canonical" href="https://argiltiles.com/">

        <title>Argil Tiles | Engineered Surfaces from Morbi</title>
    @endsection 
    @section('content')
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-12">
                    <video autoplay muted loop playsinline class="hero-video">
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
                    <h1 class="fw-bold">Argil Tiles — Surfaces Built for Modern Interiors</h1>
                    <p>Argil, where we have travelled from Tradition to technology, we feel the journey is growing longer
                        and better with every passing day.
                    </p>
                    <p>
                        We have always respected our traditions and culture and have whole heartedly embraced technology to
                        take us forward without any exceptions. May this journey be never ending and always challenging us
                        to soar greater height of success and achievement.</p>
                </div>
                <div class="col-md-4 pt-5">
                    <img src="{{ asset('assets/asset/home-about.png') }}" class="img-fluid" alt="argil-home"
                        title="argil-home" fetchpriority="high" decoding="async" />
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-12">
                    <p>The management of Argil has always accomplished the big goals set out by us together. Unarguably,
                        they have done it with ethics and moral of our community. Throughout their journey they have upheld
                        the principles of sharing the growth with all stakeholders, leaving faces smiling and hearts warm
                        with affection and respect for the brand.

                        I would like to congratulate you on the same and motivate you to always be this humble and serving
                        to your brand and people associated.
                    </p>
                    <p class="text-justify">
                        The factory in Morbi supplies kitchens, bathrooms, retail floors, and hospitality projects with
                        consistent colour and finish. Teams can review catalogues, request samples, and confirm sizes
                        before an order is packed. Production follows documented checks at mixing, pressing, and
                        finishing so each lot stays within the agreed shade and thickness.
                    </p>
                    <p class="text-justify">
                        Export cartons and crates are planned for long routes. Share drawings or a bill of quantities
                        and the same desk will advise lead time, packing, and the closest port schedule. After dispatch,
                        support continues with documents, photos of lots, and guidance for site handling.
                    </p>

        <!-- Explore More Section -->
        <h2 class="h5 fw-bold mt-4 mb-3">Explore More</h2>
        <div class="row g-3">

            <div class="col-md-4">
                <a href="/about-argil" class="resource-card">
                    About Us
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/who-is-argil" class="resource-card">
                    Our Story
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

        <div class="container py-5">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="fw-bold mb-3">Where These Surfaces Work</h2>
                    <p class="text-justify">
                        Kitchen platforms need a closed surface that wipes clean after cooking. Bath vanities need a
                        finish that holds up to moisture. Offices and stores need floors that take carts and daily
                        traffic without cupping. Hotels need a calm look that repeats across rooms. The same plant
                        can cover those uses with coordinated colours, so a project does not mix lots from different
                        sources.
                    </p>
                    <p class="text-justify">
                        Specifiers usually start with a sample board, then lock thickness, edge, and finish. From
                        there we confirm capacity and packing. That sequence keeps drawings, purchase orders, and
                        site delivery on the same page, whether the destination is a local fit-out or an overseas
                        warehouse.
                    </p>
                </div>
            </div>
        </div>
       
        <!-- Product Section -->
        <div class="container">
            <div class="row pt-5">
                <h2 class="text-center fw-bold">Premium Collections for Homes and Commercial Projects</h2>
            </div>
            <div class="row pt-5">

                <div class="col-md-4">
                    <img src="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" alt="engineered stone slab"
                        title="engineered stone slab" loading="lazy" class="img-fluid">
                </div>
                <div class="col-md-8 ">
                    <h2>Engineered Stone</h2>

                    <p class="text-justify">Engineered stone is a dense surface that looks and performs much like natural granite. It resists stains, scratches, and cracking, and handles everyday heat and cold. Makers blend mineral aggregates with resins and pigments to form these slabs—typically about 90% pulverised natural mineral and 10% polyresin, with slight variation by grade. The finish stays consistent, so kitchens and platforms keep a clean, uniform look.</p>
                    <p>
                        <a href="/quartzsurface" class="btn-primary fw-bold text-decoration-none"> Explore Quartz Collection <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <div class="quartz-links mt-4 ">

                        <h3 class="h5 fw-bold mb-3">Explore More</h3>

                        <div class="row g-3">
                        
                            <div class="col-md-4">
                                <a href="/quartz-slab-manufacturer-india" class="resource-card">
                                    <span>Slab Manufacturer</span>
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
                                    <span>Surface Exporter</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-8">
                    <h2>Rigid-Core Vinyl</h2>
                    <p class="text-justify">Stone-plastic composite (SPC) planks are a durable floor option made from limestone powder, PVC, and stabilizers. <span id="products">The</span> rigid core resists water, dents, and scratches in kitchens, baths, and busy rooms. A click-lock system installs without glue or nails. Layers include a wear coat, decorative film, solid core, and underlayment for comfort and quieter steps. The look often mimics wood or stone, and daily cleaning stays simple for homes and workplaces.</p>
                    <p>
                        <a href="/spcproducts" class="btn-primary fw-bold text-decoration-none"> Explore Vinyl Collection <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <h3 class="h5 fw-bold mb-3">Explore More</h3>

<div class="row g-2 mt-3 mb-3">

    <div class="col-md-4">
        <a href="/spc-flooring-manufacturer-india" class="resource-card">
            Rigid-Core Vinyl
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
            Vinyl Exporter
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

                    <img src="{{ asset('asset/images/argileimage/spc1.jpg') }}" alt="rigid-core vinyl planks"
                        title="rigid-core vinyl planks" loading="lazy" class="img-fluid text-right">
                </div>
                
            </div>
        </div>
        

        <!-- Usability Section -->
        @include('visitors.comanfile.usablity')
        <!-- Usability Section -->

         {{-- testimonial --}}
         @include('visitors.testimonial')
        
    @endsection
