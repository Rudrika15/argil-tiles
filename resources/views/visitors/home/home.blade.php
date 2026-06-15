    @extends('layouts.app')
    @section('seosection')
        <meta name="description"
            content="Argil manufactures premium engineered quartz slabs & SPC flooring in Morbi, Gujarat. ISO-certified. Explore 50+ designs. Request a quote today!">

        <meta name="keywords"
            content="Argil Tiles, quartz surface manufacturer, artificial quartz slabs, quartz stone Morbi, SPC flooring manufacturer, vinyl flooring manufacturer, premium quartz India, Morbi tiles manufacturer, SPC vinyl flooring, quartz surfaces for homes and commercial">


        <meta property="og:title" content="Artificial Quartz Stone Slab
Manufacturers In Morbi, Gujarat, India | Argil"
            data-react- helmet="true">
        <meta property="og:url" content="https://argiltiles.com/" data-react-helmet="true">
        <meta property="og:description"
            content="Argil is an artificial
quartz stone slab manufacturer in Morbi, Gujarat, India. We
have the best-engineered quartz surface stone for kitchen and
platform at a reasonable price. We have 10+ yrs of service.
Get a price quote "
            data-react-helmet="true">
        <meta name="twitter:title" content="Artificial Quartz Stone Slab
Manufacturers In Morbi, Gujarat, India | Argil"
            data-react- helmet="true">
        <meta name="twitter:description"
            content="Argil is an artificial
quartz stone slab manufacturer in Morbi, Gujarat, India. We
have the best-engineered quartz surface stone for kitchen and
platform at a reasonable price. We have 10+ yrs of service.
Get a price quote "
            data-react-helmet="true">
        <link rel="canonical" href="https://argiltiles.com/" data- react-helmet="true">

        <title>Quartz Stone Slab
            Manufacturers | Argil – Morbi, India</title>
    @endsection 
<style>
.testimonial-card{
    position:relative;
    background:#fff;
    border:none;
    border-top:4px solid #d4b59e;
    border-radius:0;
    padding:15px;
    transition:all .3s ease;
    overflow:hidden;
}

.testimonial-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.testimonial-card::before{
    content:"❝";
    position:absolute;
    top:10px;
    right:20px;
    font-size:70px;
    line-height:1;
    color:rgba(212,181,158,.15);
    font-family:serif;
}

.testimonial-rating{
    color:#d4b59e;
    font-size:15px;
    margin-bottom:15px;
}

.testimonial-text{
    color:#555;
    line-height:1.8;
    font-size:15px;
    min-height:130px;
}

.client-image{
    width:55px;
    height:55px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #d4b59e;
}

.client-name{
    font-size:16px;
    font-weight:600;
    color:#222;
}

.client-designation{
    font-size:13px;
    color:#777;
}

.client-company{
    font-size:13px;
    color:#999;
}

.testimonial-section{
    background:#fafafa;
}
    .resource-card{
    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:15px 18px;

    border-left:3px solid #d4b59e;
    background:#f8f8f8;

    text-decoration:none;
    color:#222;

    transition:.3s;
    height:100%;
    
}

.resource-card:hover{
    background:#d4b59e;
    color:#fff;
    transform:translateY(-3px);
}

.resource-card i{
    font-size:18px;
}
</style>
    @section('content')
        <div class="container-fluid px-0">
            <div class="row g-0">
                <div class="col-12">
                    <video autoplay muted loop playsinline style="width: 100%; height: auto; display: block;">
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
                    <h1 class="fw-bold">ARGIL - SPC Flooring & Quartz Surface Manufacturer from Morbi, India</h1>
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
                        title="argil-home" loading="lazy" />
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-12">
                    <p>The management of Argil has always accomplished the big goals set out by us together. Unarguably,
                        they have done it with ethics and moral of our community. Throughout their journey they have upheld
                        the principles of sharing the growth with all stakeholders, leaving faces smiling and hearts warm
                        with affection and respect for the brand.

                        I would like to congratulate you on the same and motivate you to always be this humble and serving
                        to your brand and people associated....
                        <a href="/about" class="text-dark text-decoration-none">About More <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>

        <!-- Explore More Section -->
        <h5 class="fw-bold mt-4 mb-3">Explore More</h5>

        <div class="row g-3">

            <div class="col-md-4">
                <a href="/about-argil" class="resource-card">
                    About Argil
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/who-is-argil" class="resource-card">
                    Who Is Argil
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
            Contact Argil Tiles
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
                <h2 class="text-center fw-bold">India's Best Quartz Surface and SPC Products Suppliers</h2>
            </div>
            <div class="row pt-5">

                <div class="col-md-4">
                    <img src="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" alt="argil quartz product"
                        title="argil quartz product" loading="lazy" class="img-fluid">
                </div>
                <div class="col-md-8 ">
                    <h2>Quartz Surface</h2>

                    <p class="text-justify">Composite or engineered quartz is a very solid material that
                        resembles
                        real
                        granite
                        in
                        both look and
                        utility. Engineered quartz is unaffected by stains, scratches, and cracks. It is also resistant
                        to heat
                        and cold. Engineered By blending quartz or granite aggregates with resins and pigments, man-made
                        products like stone or quartz are created by quartz manufacturers in India, which are mostly
                        generated
                        from natural materials. The composition of engineered quartz slabs is typically 90% pulverised
                        natural
                        quartz and 10% polyresin. However, these percentages may vary slightly depending on the kind of
                        quartz
                        used.</p>
                    <p>
                        <a href="/quartzsurface" class="btn-primary fw-bold text-decoration-none"> Explore Quartz Surface <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <div class="quartz-links mt-4">

                        <h5 class="fw-bold mb-3">Explore More</h5>

                        <div class="row g-3">
                        
                            <div class="col-md-4">
                                <a href="/quartz-slab-manufacturer-india" class="resource-card">
                                    <span>Quartz Slab Manufacturer India</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                            <div class="col-md-4">
                                <a href="/quartz-slab-manufacturer-morbi" class="resource-card">
                                    <span>Quartz Slab Manufacturer Morbi</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                            <div class="col-md-4">
                                <a href="/quartz-surface-exporter-india" class="resource-card">
                                    <span>Quartz Surface Exporter India</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="row py-5">

                <div class="col-md-8">
                    <h2>SPC Flooring Tiles</h2>
                    <p class="text-justify">SPC Flooring (Stone Plastic Composite) is a modern and durable flooring solution
                        made from a mix of limestone powder, PVC, and stabilizers. <span id="products">It</span> is highly
                        water-resistant, making it
                        ideal for kitchens, bathrooms, and other moisture-prone areas. The rigid core provides excellent
                        stability and resists dents and scratches, even in high-traffic spaces. SPC flooring features a link
                        lock system that allows for quick and easy installation without glue or nails. Its layered structure
                        includes a protective wear layer, decorative vinyl layer, solid core, and attached underlayment for
                        sound insulation and comfort. It often replicates the appearance of natural wood or stone. This
                        flooring is low maintenance and easy to clean, making it a practical choice for both homes and
                        commercial environments.</p>
                    <p>
                        <a href="/spcproducts" class="btn-primary fw-bold text-decoration-none"> Explore SPC Flooring <i
                                class="bi bi-arrow-right"></i> </a>
                    </p>
                    <h5 class="fw-bold mb-3">Explore More</h5>

<div class="row g-2 mt-3 mb-3">

    <div class="col-md-4">
        <a href="/spc-flooring-manufacturer-india" class="resource-card">
            SPC Flooring Manufacturer India
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

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
    </div>

    <div class="col-md-4">
        <a href="/spc-flooring-exporter-india" class="resource-card">
            SPC Flooring Exporter India
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>

    <div class="col-md-4">
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
    </div>

</div>
                </div>
                <div class="col-md-3 offset-md-1">

                    <img src="{{ asset('asset/images/argileimage/spc1.jpg') }}" alt="argil spc product"
                        title="argil spc product" loading="lazy" class="img-fluid text-right">
                </div>
                
            </div>
        </div>
        

        <!-- Usability Section -->
        @include('visitors.comanfile.usablity')
        <!-- Usability Section -->

         {{-- testimonial --}}
         @include('visitors.testimonial')
        
    @endsection
