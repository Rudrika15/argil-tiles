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
        <link rel="canonical" href="https://argiltiles.com" />
        <meta name="keywords"
            content="Artificial Quartz, Quartz Slabs, Quartz Manufacturers, Morbi Quartz, India Quartz Stone">


        <title>Artificial Quartz Stone Slab Manufacturers In Morbi, Gujarat, India | Argil</title>
    @endsection

    @section('content')
        <!--Main Slider-->


        <div class="container-fluid" style="padding:0!important">
            <video autoplay muted loop width="100%">
                <source src="asset/video/homescreenvideo.mp4" type="video/mp4">
            </video>
        </div>


        <!-- main slider end -->
        <div class="container " style="padding-top: 25px">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h1 class="heading1 heading-h1">Artificial Quartz Stone Slab Manufacturers</h1>
                    </div>
                    <div>
                        <p class="paragraph text-justify">
                            Argil, where we have travelled from Tradition to technology, we feel the journey is growing
                            longer and better with every passing day.
                        </p>
                    </div>
                    <div>
                        <p class="paragraph text-justify">We have always respected our traditions and culture and have whole
                            heartedly embraced technology
                            to take us forward without any exceptions. May this journey be never ending and always
                            challenging us to soar greater height of success and achievement.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="asset/images/argileimage/hometextlogo.png" alt="home page logo" title="home page logo"
                        class="img-responsive">
                </div>
                <div class="col-md-12">
                    <p class="paragraph text-justify">The management of Argil has always accomplished the big goals set out
                        by us together. Unarguably, they
                        have done it with ethics and moral of our community. Throughout their journey they have upheld the
                        principles of sharing the growth with all stakeholders, leaving faces smiling and hearts warm with
                        affection and respect for the brand.</p>


                    <p class="paragraph text-justify">I would like to congratulate you on the same and motivate you to
                        always be this humble and serving to
                        your brand and people associated.<span><a href="/about">...MORE</a></span></p>
                </div>
            </div>
        </div>

        {{-- Why Choose Argil Group? --}}

        @include('visitors.comanfile.certificate')


        <div class="producttitle text-center">
            <h3>India's Best Quartz Surface and SPC Products Suppliers</h3>
        </div>
        <div class="productimage">
            <div class="product1" data-aos="zoom-in-up">
                <div class="overlay-style-two">
                    <div class="item">
                        <figure class="img-box">
                            <a href="/quartzsurface"><img src="asset/images/argileimage/productimage1.jpg"
                                    alt="quartz image" title="quartz product" class="img-responsive"></a>
                            <div class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer">
                                        <a href="/quartzsurface" class="btn-one">GET A PRICE QUOTE</a>
                                    </div>
                                </div>
                            </div>
                        </figure>

                    </div>
                </div>
            </div>
            <div class="product1" data-aos="zoom-in-up">

                <div class="overlay-style-two">
                    <div class="item">
                        <figure class="img-box">
                            <a href="/spcproducts"><img src="asset/images/argileimage/productimage2.jpg" alt="spc product"
                                    title="spc image" class="img-responsive"></a>
                            <div class="default-overlay-outer">
                                <div class="inner">
                                    <div class="content-layer">
                                        <a href="/spcproducts" class="btn-one">GET A PRICE QUOTE</a>
                                    </div>
                                </div>
                            </div>
                        </figure>

                    </div>
                </div>
            </div>
        </div>

        {{-- Enhancing the usability --}}

        @include('visitors.comanfile.usablity')
    @endsection
