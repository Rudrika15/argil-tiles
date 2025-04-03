@extends('layouts.app')
@section('content')
    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">
                    <h1>Quartz Surface</h1>
                </div>
                <div class="bread-crumb">
                    <a href="index.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Quartz Surface</span>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <div class="heading-title container-fluid headding-content">
        <h2 class="container">Home/Quartz Surface</h2>
    </div>


    <div class="quartz-bg-image">
        <a href="/contact"><img src="asset/images/argileimage/quartzimage.jpg" alt="" class="img-responsive"></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 surface-image">
                <img src="asset/images/argileimage/quartzimage1.jpg" alt=""
                    class="img-responsive all-page-side-image">
            </div>
            <div class="col-md-6 overview">
                <h3>overview</h3>
                <p class="text-justify">Composite or engineered quartz is a very solid material that resembles real granite
                    in
                    both look and
                    utility. Engineered quartz is unaffected by stains, scratches, and cracks. It is also resistant to heat
                    and cold. Engineered By blending quartz or granite aggregates with resins and pigments, man-made
                    products like stone or quartz are created by quartz manufacturers in India, which are mostly generated
                    from natural materials. The composition of engineered quartz slabs is typically 90% pulverised natural
                    quartz and 10% polyresin. However, these percentages may vary slightly depending on the kind of quartz
                    used.</p>
            </div>
        </div>
    </div>
    {{-- why choose argile group --}}
    @include('visitors.comanfile.certificate')
    {{-- end why choose argile group --}}

    {{-- Quartz Stone Slab --}}

    <div class="quartz-stone-heading">
        <h3 class="text-center">Quartz Stone Slab</h3>
    </div>
    <div class="container quartzsurface">
        <div class="row">
            @foreach ($data as $index => $item)
                <div class="col-md-4 col-md-6" data-aos="flip-up">
                    <a href="{{ Route('quartzinquiry', $item->id) }}">
                        <div class="card1">
                            <img src="{{ asset('quartz/' . $item->mainImg) }}" alt="" class="img-responsive">
                            <p class="text-center">{{ $item->name }}</p>
                        </div>
                    </a>
                </div>

                {{-- After every 3 products, start a new row --}}
                @if (($index + 1) % 3 == 0)
        </div>
        <div class="row">
            @endif
            @endforeach
        </div>
    </div>

    {{-- enhancing the usablity --}}
    {{-- @include('visitors.comanfile.certificate') --}}
    @include('visitors.comanfile.usablity')
    {{-- end enhancing the usablity --}}

    <div class="container">
        <div class="row">
            <div class="col-md-12 advantage-parapraph">
                <h3 class="text-center">Advantages of Artifical Quartz Stones</h3>
                <p class="paragraph text-center">
                    Artificial quartz stones are manufactured from natural quartz crystals that are bound together with the
                    help of a binding resin, as compared with natural quartz stones, which are carved from pure sandstone,
                    marble, or granite. Artificial variations will resemble the natural ones in appearance. However, there
                    are numerous advantages to buying premium-class artificial quartz stone from artificial quartz stone
                    manufacturers in India, which are
                </p>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 advantage-card" data-aos="fade-up">
                    <h3 class="heading2">Attractive look and feel</h3>
                    <p class="text-justify">The compressed artificial quartz material is made into slabs with variations of
                        natural stone's
                        texture
                        and colour. The manufactured varieties' colours differ in that they are much more uniform in
                        appearance.
                        You may get a wide variety of imitation quartz stones at different stores in lovely colours to match
                        any
                        decor.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 advantage-card1" data-aos="fade-up">
                    <h3>Easy to maintain</h3>
                    <p>Natural quartz has pores in them. However, the polished surface of artificial stone does not absorb
                        moisture. As a result, cleaning the surface is simpler and requires less care. Additionally, the
                        surface is stain- and scratch-resistant. Because of easy maintenance, these artificial quartz last
                        longer and look new for years.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 advantage-card" data-aos="fade-up">
                <h3>Available in a variety of options</h3>
                <p>The size, quart colours, treatments, and patterns of composite quartz stone are present in a variety of
                    options. As a result, you will never be without resources to help in the design or renovation of an
                    existing area. The top choices include Zodiac Black, Zodiac Red, Crystal White, and many others.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 advantage-card1" data-aos="fade-up">
                <h3>Cost effective</h3>
                <p>The cost of natural stone might vary depending on the kind, colour, and quality of the stone but is
                    typically more. For less money, artificial quartz stone offers a more luxurious and traditional
                    appearance. Quartz slab manufacturers in India make variety of cost effective slabs which are available
                    in amazing colors and variants</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 advantage-card" data-aos="fade-up">
                <h3>Durability</h3>
                <p>Artificial quartz is as strong and hard as granite, with the benefit of being chip and crack resistant.
                    The engineered stone will only crack if it is not fitted properly on the surfaces. Hence, artificial
                    quartz stones last longer and due to their easy maintenance, they look the same for years.</p>
            </div>
        </div>
    </div>
    </div>
    <div class="container text-center quartz-paragraph">
        <h3>Uses and Applications of Quartz Stones</h3>
        <p class="paragraph">There are a number of usage and applications of artificial quartz stones which is why they are
            so much popular
            amongst people. These are</p>
    </div>
    <div class="container quartz-paragraph1">
        <ul>
            <li>It can be perfect for both residential and commercial uses because of its long lifespan and low maintenance
                requirements. Quartz will provide your interior spaces with the ideal classy finish.</li>
            <li>You may also use engineered stone for your kitchen backsplash to prevent spills and stains on your walls.
            </li>
            <li>Engineered quartz slabs are ideal for interior walls since they are non-porous and frequently offer mould
                and mildew resistance. They are therefore used as quartz stone for kitchen platform and also appropriate for
                wet rooms in both residential and commercial structures.
            </li>
        </ul>
    </div>
    <div class="bg-image-enchance">
        {{-- <img src="asset/images/argileimage/backgroundimage1.jpg" alt="" class="img-responsive bg-image-enhance1"> --}}
        <div class="container-fluid bg-imgae-enhance1">
            <div class="row">
                <div class="col-md-6">
                    <img src="asset/images/argileimage/quartzimage5.jpg" alt="" class="img-responsive bg-img1">
                </div>
                <div class="col-md-6 card3">
                    <h3 class="bg-image-title">Argil Quartz Slab Manufacturing Process</h3>
                    <p class="text-justify">Finely crushed quartz is combined with resin, stabilising polymers,
                        and colouring pigments to create
                        Argil Quartz Slabs, which are then polished to an amazing mirror finish. We are one of the leading
                        quartz countertops manufacturers in the country with a number of satisfied customers.</p>
                    <p class="text-justify">At Argil, we have the greatest expectations for ourselves. To ensure
                        the final product is the finest
                        it can be, our production process follows a number of strict practices and procedures. Mixing,
                        pressing, polishing and quality control are some of the best practices that are followed at our
                        facility </p>
                </div>
            </div>
        </div>
        <div class="container main-bg-enhance-card">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default bg-enhance-card" data-aos="fade-up">
                        <div class="panel-body">
                            <img src="asset/images/argileimage/quartz-bg1.png" alt="" class="img-responsive">
                            <h3>MIXING</h3>
                            <p>The fundamental components of an Argil Tiles Slab, such as Natural Quartz Grits, Resin,
                                colouring
                                agents
                                (traces), and texturizing material, are all thoroughly tested before being combined in huge
                                overhead
                                mixers. It's crucial to remember that all Argil Tile variations and colours are produced
                                using
                                the
                                same
                                fundamental process which makes Argil, one of the leading quartz stone manufacturers in
                                Morbi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default bg-enhance-card" data-aos="fade-up">
                        <div class="panel-body">
                            <img src="asset/images/argileimage/quartz-bg2.png" alt="" class="img-responsive">
                            <h3>PRESSING</h3>
                            <p class="card-para">Spread onto trays, the mixture is compacted with intense vibration and
                                pressure. The
                                compressed
                                mixture is then transferred to a curing room, where it is heated for about an hour at about
                                90°C
                                before cooling. In this phase, the mixture's resin is activated, combining with the quartz
                                to
                                create
                                a slab. These curved and irregular stones now have the classic hardness and stain
                                resistance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default bg-enhance-card" data-aos="fade-up">
                        <div class="panel-body">
                            <img src="asset/images/argileimage/quartz-bg3.png" alt="" class="img-responsive">
                            <h3>POLISHING</h3>
                            <p>Using two sets of parallel diamond saws, the uneven slab's four sides are now cut to the
                                appropriate
                                size. To achieve the precise needed thickness, the slab's upper and lower surfaces are
                                calibrated
                                using a multi-head diamond calibration machine. And a multi-head polishing machine is used
                                to
                                polish
                                the finished surface until it has the correct mirror glaze. What distinguishes the finished
                                product
                                is its mirror glaze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="panel panel-default bg-enhance-card" data-aos="fade-up">
                        <div class="panel-body">
                            <img src="asset/images/argileimage/quartz-bg4.png" alt="" class="img-responsive">
                            <h3>QUALITY CONTROL</h3>
                            <p class="card-para1">Every step of the manufacturing process undergoes inspection at Argil
                                Tiles, from selecting
                                the
                                best
                                raw materials to maintaining strict quality control standards. Our Quality Control division
                                inspects
                                each slab for flaws and impurities. The slabs are only sorted and marked for entry into our
                                distribution system after they have given their permission.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    {{-- start accrodian --}}

    <div class="container">
        <div class="row">
            <div class="heading-faq text-center">
                <h2>FAQs</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">What are quartz countertops?</h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Quartz countertops are elegant, practical, and low-maintenance and are composed of bits
                            of
                            quartz held together in an industrial-grade binder. Quartz countertops manufacturers
                            make
                            different varieties of quartz countertops to cater the needs of their customers.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">What are the advantages of quartz slabs?</h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Attractive look and feel, Ease of to maintenance, Availability in a variety of options,
                            Cost
                            effectiveness, and Durability are some of the major advantages of quartz slabs
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">What are the disadvantages of quartz slabs?</h4>
                    </div>
                    <div id="collapsethree" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            The cost and heat resistance of quartz countertops are their major disadvantages. A
                            quartz
                            kitchen counter top can be out of your price range if you're installing worktops on a
                            tight
                            budget. Additionally, heated cookware and appliances can harm quartz countertops.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">How can quartz slabs be used?</h4>
                    </div>
                    <div id="collapsefour" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Quartz slabs are perfect for a variety of wonderful home improvements. Quartz is most
                            frequently
                            used for countertops, backsplashes in kitchens, tabletop surfaces, and flooring.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title"> Are quartz slabs high maintenance?</h4>
                    </div>
                    <div id="collapsefive" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Low maintenance is required for quartz slabs and countertops. Look no further if you're
                            unsure
                            of how to maintain your black or white quartz countertops. Quartz is relatively simple
                            to keep
                            clean and maintain. To keep surfaces looking their best, use a soft substance cloth and
                            a
                            moderate cleaning chemical.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">How much is a slab of quartz?</h4>
                    </div>
                    <div id="collapsesix" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Quartz slabs are significantly more expensive per square than materials like ceramic and
                            porcelain. Quartz slabs of good quality and depending upon the thickness artificial
                            quartz stone
                            manufacturers in Morbi and rest of India can charge between 200 to 400 Rupees per square
                            foot.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">Do quartz countertops scratch easily?</h4>
                    </div>
                    <div id="collapseseven" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Quartz slabs and countertops are extremely scratch-resistant; quartz of good quality may
                            withstand regular use without being harmed.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">Is quartz more expensive than granite?</h4>
                    </div>
                    <div id="collapseeight" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Granite costs more than quartz often. There are several types of low-quality granite
                            that you
                            might get cheaply, but using such a material is not advised.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">Is quartz better than granite?</h4>
                    </div>
                    <div id="collapsenine" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Both quartz and granite are extraordinarily stunning and durable. Depending on your
                            preferred
                            design and intended use for your countertops or floors, you may select one material over
                            another. Granite is a natural stone, while quartz is man-made. Compared to granite,
                            quartz
                            requires fewer maintenance tasks because it doesn't need to be sealed.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="true"
                aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title"> Does quartz stain easily?</h4>
                    </div>
                    <div id="collapseten" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Quartz is not easily stained. Quartz tiles and slabs are stain-resistant because of the
                            resin
                            combination used in their construction.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title"> Is quartz cheaper than concrete?</h4>
                    </div>
                    <div id="collapseeleven" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Concrete countertops are typically less expensive for homeowners than quartz surfaces.
                            Quartz
                            countertops are more expensive but require little maintenance, making them the more
                            preferred
                            choice.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwell"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">Is quartz cheaper than marble?</h4>
                    </div>
                    <div id="collapsetwell" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            Yes. Quartz is frequently less expensive than marble. Natural luxury stones like marble
                            are
                            typically fairly pricey. Quartz countertops can be great for a luxurious aesthetic with
                            a lower
                            price tag because they often cost substantially less.
                        </div>
                    </div>
                </div>
            </a>
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethirteen"
                aria-expanded="true" aria-controls="collapseOne">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">How should quartz be cleaned?</h4>
                    </div>
                    <div id="collapsethirteen" class="panel-collapse collapse in" role="tabpanel"
                        aria-labelledby="headingOne">
                        <div class="panel-body">
                            The best cleaner for quartz slabs or countertops is a blend of warm water and mild
                            detergent,
                            despite the fact that there are numerous secure commercial products on the market. Your
                            quartz
                            surfaces will remain clean with routine cleaning.
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- end accrodian --}}


    <div class="container contact-details-form">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/images/argileimage/footerimge.jpg" alt=""
                    class="quartz-image-footer img-responsive">
            </div>
            <div class="col-md-6">
                <div class="contact-form-area">
                    <div class="contact-title">Contact us</div>
                    <div class="text">
                        <p>Let's Be in Touch !!!</p>
                    </div>
                    <form id="contact-form" name="contact_form" class="default-form" action="inc/sendmail.php"
                        method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Your Name "
                                    class="inp" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Email"
                                    class="inp" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Contact Number"
                                    class="inp" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder='Subject'
                                    class="inp" required="">
                            </div>
                            <div class="col-md-12 ">
                                <textarea placeholder="Message" name="form_message" required="" class="textarea inp"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn-one btn-class1" data-loading-text="Please wait...">Request
                            Price
                            Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
