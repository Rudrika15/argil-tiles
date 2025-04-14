    @extends('layouts.app')
    @section('seosection')
        <title>Artificial Quartz Stone Slab Manufacturers In Morbi, Gujarat, India | Argil</title>
    @endsection

    @section('content')
        <!--Main Slider-->
        <section class="main-slider">

            <div class="tp-banner-container">
                <div class="tp-banner">
                    <video autoplay muted loop width="100%">
                        <source src="asset/video/homescreenvideo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>

        <!-- main slider end -->
        <div class="+ container " style="padding-top: 25px">
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
                    <img src="asset/images/argileimage/hometextlogo.png" alt="home page logo" class="img-responsive">
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
                {{-- <a href="/quartzsurface"><img src="asset/images/argileimage/productimage1.jpg" alt="" class="img-responsive"></a> --}}
                <div class="overlay-style-two">
                    <div class="item">
                        <figure class="img-box">
                            <a href="/quartzsurface"><img src="asset/images/argileimage/productimage1.jpg" alt="quartz image"
                                    class="img-responsive"></a>
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
                {{-- <a href="/spcproducts"><img src="asset/images/argileimage/productimage2.jpg" alt=""
                        class="img-responsive"></a> --}}
                <div class="overlay-style-two">
                    <div class="item">
                        <figure class="img-box">
                            <a href="/spcproducts"><img src="asset/images/argileimage/productimage2.jpg" alt="spc image"
                                    class="img-responsive"></a>
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

        {{-- <section class="latest-products sec-pad centred">
            <div class="container">
                <div class="sec-title">
                    <h2>Latest Products Shop</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 shop-column">
                        <div class="overlay-style-two">
                            <div class="item">
                                <figure class="img-box">
                                    <a href="/quartzsurface"><img src="asset/images/argileimage/productimage1.jpg"
                                            alt="" class="img-responsive"></a>
                                    <div class="default-overlay-outer">
                                        <div class="inner">
                                            <div class="content-layer">
                                                <a href="service-1.html" class="btn-one">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section> --}}


        {{-- Enhancing the usability --}}

        @include('visitors.comanfile.usablity')
    @endsection
