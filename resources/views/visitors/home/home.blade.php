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
        <div class="topcontent container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h2 class="heading1">Artificial Quartz Stone Slab Manufacturers</h2>
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
                    <img src="asset/images/argileimage/hometextlogo.png" alt="" class="img-responsive">
                </div>
                <div class="col-md-12">
                    <p class="paragraph text-justify">The management of Argil has always accomplished the big goals set out
                        by us together. Unarguably, they
                        have done it with ethics and moral of our community. Throughout their journey they have upheld the
                        principles of sharing the growth with all stakeholders, leaving faces smiling and hearts warm with
                        affection and respect for the brand.</p>


                    <p class="paragraph text-justify">I would like to congratulate you on the same and motivate you to
                        always be this humble and serving to
                        your brand and people associated.<span><a href="">...MORE</a></span></p>
                </div>
            </div>
        </div>

        {{-- Why Choose Argil Group? --}}

        @include('visitors.comanfile.certificate')


        {{-- <div class="producttitle text-center">
        <h3>India's Best Quartz Surface and SPC Products Suppliers</h3>
    </div>
    <div class="productimage">
        <div class="product1"  data-aos="zoom-in-up">

        </div>
        <div class="product1" data-aos="zoom-in-up">
            <img src="asset/images/argileimage/productimage2.jpg" alt=""  class="img-responsive">
        </div>
    </div>
 --}}
        <div class="productimage container">
            <div class="row">
                <div class="col-md-6">
                    <img src="asset/images/argileimage/productimage1.jpg" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <img src="asset/images/argileimage/productimage2.jpg" alt="" class="img-responsive">

                </div>
            </div>
        </div>


        {{-- Enhancing the usability --}}

        @include('visitors.comanfile.usablity')
    @endsection
