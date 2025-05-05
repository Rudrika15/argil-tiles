    @extends('layouts.app')
    @section('seosection')
        <meta name="description"
            content="Argil is a leading artificial quartz stone slab manufacturer in Morbi, Gujarat, India.
Explore premium quartz surfaces for homes and businesses.">
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
        <meta name="keywords"
            content="Artificial Quartz, Quartz Slabs, Quartz Manufacturers, Morbi Quartz, India Quartz Stone">


        <title>Artificial Quartz Stone Slab Manufacturers In Morbi, Gujarat, India | Argil</title>
    @endsection

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
                    <h2 class="fw-bold">Artificial Quartz Stone Slab Manufacturers</h2>
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
                        <a href="/about" class="text-dark">Read More</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Why Choose Us -->
        @include('visitors.comanfile.certificate')
        <!-- Why Choose Us -->

        <!-- Product Section -->
        <div class="container">
            <div class="row pt-5">
                <h2 class="text-center fw-bold">India's Best Quartz Surface and SPC Products Suppliers</h2>
            </div>
            <div class="row pt-5">
                <div class="col-md-4 text-center offset-md-2">
                    <a href="/quartzsurface">
                        <img src="https://dev.argiltiles.com/asset/images/argileimage/productimage1.jpg"
                            class="img-fluid h-75" alt="product-image" title="spc product" loading="lazy" />
                    </a>
                </div>
                <div class="col-md-4 text-center">
                    <a href="/spcproducts">
                        <img src="https://dev.argiltiles.com/asset/images/argileimage/productimage2.jpg"
                            class="img-fluid h-75" alt="product-image" title="quartz product" loading="lazy" />
                    </a>
                </div>
            </div>
        </div>

        <!-- Usability Section -->
        @include('visitors.comanfile.usablity')
        <!-- Usability Section -->
    @endsection
