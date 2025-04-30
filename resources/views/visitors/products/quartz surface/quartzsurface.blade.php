@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Premium quartz stone slabs for
countertops & kitchen platforms. Manufactured in Morbi, Gujarat, India.
Explore our high-quality designs at Argil." />
    <meta name="keywords"
        content="Quartz Slabs, Quartz Countertops,
Kitchen Surfaces, Argil Tiles, Quartz Stone Manufacturers, Morbi Gujarat" />
    <meta name="author" content="Argil Group – Leading Manufacturer of
Premium Quartz Surfaces">
    <meta property="og:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet
="true">
    <meta property="og:url" content="https://argiltiles.com/quartzsurface" data-react-helmet="true">
    <meta property="og:description"
        content="Argil is a quartz surface stone slab
for kitchen platform countertops manufacturers in Morbi, Gujarat, India. We have
 the best engineered  quartz surface stone for kitchen and platform  at a
 reasonable price We have 10+ yrs of service. Get a price quote "
        data-react- helmet="true">
    <meta name="twitter:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet="true">
    <meta name="twitter:description"
        content="Argil is a quartz surface stone
slab for kitchen platform countertops manufacturers in Morbi, Gujarat, India. We
 have the best engineered  quartz surface stone for kitchen and platform  at a
reasonable price We have 10+ yrs of service. Get a price quote  "
        data-react-helmet="true">
    <link rel="canonical" href="https://argiltiles.com/quartzsurface" data-react- helmet="true">
    <title>Quartz Countertops & Kitchen Slabs Manufacturer | Argil</title>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Quartz Surface Products</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->

    <div class="container">

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" alt="argil quartz product" title="argil quartz product" loading="lazy"
                    class="img-fluid w-75 mb-5 mt-4">
            </div>
            <div class="col-md-6">
                <h3 class="mt-5">overview</h3>
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


    <!-- Why Choose Us -->
    @include('visitors.comanfile.certificate')
    <!-- Why Choose Us -->


    <div class="container">


        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">Quartz Stone Slab</h2>

            @foreach ($data as $index => $item)
                <div class="col-md-4 pt-5">
                    <a href="{{ Route('quartzinquiry', $item->id) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('quartz/' . $item->mainImg) }}" class="card-img-top" alt="Tile Image" title="Tile Image"
                                loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <!-- Usability Section -->
    @include('visitors.comanfile.usablity')
    <!-- Usability Section -->


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center fw-bold pt-5">Advantages of Artifical Quartz Stones</h3>
                <p class="text-center mt-4">
                    Artificial quartz stones are manufactured from natural quartz crystals that are bound together with the
                    help of a binding resin, as compared with natural quartz stones, which are carved from pure sandstone,
                    marble, or granite. Artificial variations will resemble the natural ones in appearance. However, there
                    are numerous advantages to buying premium-class artificial quartz stone from artificial quartz stone
                    manufacturers in India, which are
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="main-container"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fw-bold pt-5">Attractive look and feel</h4>
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
            <div class="col-md-12">
                <h4 class="fw-bold pt-2">Easy to maintain</h4>
                <p class="text-justify">Natural quartz has pores in them. However, the polished surface of artificial
                    stone does not absorb
                    moisture. As a result, cleaning the surface is simpler and requires less care. Additionally, the
                    surface is stain- and scratch-resistant. Because of easy maintenance, these artificial quartz last
                    longer and look new for years.</p>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fw-bold pt-2">Available in a variety of options</h4>
                <p class="text-justify">The size, quart colours, treatments, and patterns of composite quartz stone are
                    present in a variety of
                    options. As a result, you will never be without resources to help in the design or renovation of an
                    existing area. The top choices include Zodiac Black, Zodiac Red, Crystal White, and many others.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fw-bold pt-2">Cost effective</h4>
                <p class="text-justify">The cost of natural stone might vary depending on the kind, colour, and quality of
                    the stone but is
                    typically more. For less money, artificial quartz stone offers a more luxurious and traditional
                    appearance. Quartz slab manufacturers in India make variety of cost effective slabs which are available
                    in amazing colors and variants</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="fw-bold pt-2">Durability</h4>
                <p class="text-justify">Artificial quartz is as strong and hard as granite, with the benefit of being chip
                    and crack resistant.
                    The engineered stone will only crack if it is not fitted properly on the surfaces. Hence, artificial
                    quartz stones last longer and due to their easy maintenance, they look the same for years.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-4">
            <h3 class="text-center fw-bold pt-2">Uses and Applications of Quartz Stones</h3>
            <p class="text-center pt-2">There are a number of usage and applications of artificial quartz stones which is
                why
                they
                are
                so much popular
                amongst people. These are</p>
        </div>
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


    <!-- Usability Section -->
    <div class="container-fluid parallax"
        style="background-image: url(./assets/asset/enhance-bg.999209ece5b0474be060.jpg); ">

        <div class="container">
            <div class="row py-5 text-center">
                <div class="col-md-6">
                    <img src="{{ asset('asset/images/argileimage/quartzimage5.jpg') }}" alt="argil quartz product" title="argil quartz product" loading="lazy"
                        class="img-fluid w-75 border rounded p-2" />
                </div>
                <div class="col-md-6">
                    <h3 class="text-center fw-bold text-white mt-2">Argil Quartz Slab Manufacturing Process</h3>
                    <p class="text-justify text-white">Finely crushed quartz is combined with resin, stabilising polymers,
                        and colouring pigments to create
                        Argil Quartz Slabs, which are then polished to an amazing mirror finish. We are one of the leading
                        quartz countertops manufacturers in the country with a number of satisfied customers.</p>
                    <p class="text-justify text-white">At Argil, we have the greatest expectations for ourselves. To ensure
                        the final product is the finest
                        it can be, our production process follows a number of strict practices and procedures. Mixing,
                        pressing, polishing and quality control are some of the best practices that are followed at our
                        facility </p>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-md-3">
                    <div class="card text-center mt-3">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg1.png" alt="MIXING" title="MIXING" loading="lazy"
                             class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pt-1">MIXING</h4>
                            <p class="card-text pt-2">The fundamental components of an Argil Tiles Slab, such as Natural
                                Quartz
                                Grits, Resin,
                                colouring
                                agents
                                (traces), and texturizing material, are all thoroughly tested before being combined in huge
                                overhead
                                mixers. It's crucial to remember that all Argil Tile variations and colours are produced
                                using
                                the
                                same
                                fundamental process which makes Argil, one of the leading quartz stone manufacturers in
                                Morbi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg2.png" alt="PRESSING" title="PRESSING" loading="lazy" class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title pt-1">PRESSING</h4>
                            <p class="card-text pt-2">Spread onto trays, the mixture is compacted with intense vibration
                                and pressure. The compressed mixture is then transferred to a curing room, where it is
                                heated for about an hour at about 90°C before cooling. In this phase, the mixture's resin is
                                activated, combining with the quartz to create a slab. These curved and irregular stones now
                                have the classic hardness and stain resistance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg3.png" alt="POLISHING" title="POLISHING" class="card-img-top w-25">                        </div>
                        <div class="card-body">
                            <h4 class="card-title pt-1">POLISHING
                            </h4>
                            <p class="card-text pt-2">Using two sets of parallel diamond saws, the uneven slab's four sides
                                are now cut to the appropriate size. To achieve the precise needed thickness, the slab's
                                upper and lower surfaces are calibrated using a multi-head diamond calibration machine. And
                                a multi-head polishing machine is used to polish the finished surface until it has the
                                correct mirror glaze. What distinguishes the finished product is its mirror glaze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg4.png" alt="QUALITY CONTROL" title="QUALITY CONTROL" class="card-img-top w-25">                        </div>
                        <div class="card-body">
                            <h4 class="card-title pt-1">QUALITY CONTROL</h4>
                            <p class="card-text pt-2 mb-5">Every step of the manufacturing process undergoes inspection at Argil
                                Tiles, from selecting the best raw materials to maintaining strict quality control
                                standards. Our Quality Control division inspects each slab for flaws and impurities. The
                                slabs are only sorted and marked for entry into our distribution system after they have
                                given their permission.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">FAQs</h2>

        <div class="accordion" id="accordionExample">

            <!-- FAQ 1 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                        aria-controls="collapseOne">
                        What are quartz countertops?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz countertops are elegant, practical, and low-maintenance, made from natural quartz stone with
                        resin.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        What are the advantages of quartz slabs?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Attractive appearance, ease of maintenance, variety of options, cost-effectiveness, and durability.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                        aria-controls="collapseThree">
                        What are the disadvantages of quartz slabs?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz is not heat-resistant and can be more expensive than some other countertop materials like
                        granite.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                        aria-controls="collapseFour">
                        How can quartz slabs be used?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz slabs are used for countertops, backsplashes, tabletops, and even flooring in kitchens and
                        bathrooms.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                        aria-controls="collapseFive">
                        Are quartz slabs high maintenance?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz slabs are low-maintenance and easy to clean with mild soap and water. They do not require
                        sealing like granite.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                        aria-controls="collapseSix">
                        How much is a slab of quartz?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        The price of a quartz slab can vary, but on average it ranges from $50 to $100 per square foot,
                        depending on the brand and quality.
                    </div>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                        aria-controls="collapseSeven">
                        Do quartz countertops scratch easily?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz countertops are highly scratch-resistant due to their hard surface, but they can still get
                        scratched with excessive force.
                    </div>
                </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                        aria-controls="collapseEight">
                        Is quartz more expensive than granite?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz is generally more expensive than granite, though the cost can vary depending on quality and
                        brand.
                    </div>
                </div>
            </div>

            <!-- FAQ 9 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                        aria-controls="collapseNine">
                        Is quartz better than granite?
                    </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz is engineered and more consistent in color and pattern, whereas granite is a natural stone
                        with unique patterns.
                    </div>
                </div>
            </div>

            <!-- FAQ 10 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                        aria-controls="collapseTen">
                        Does quartz stain easily?
                    </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz is highly stain-resistant, but it's still important to clean up spills immediately,
                        especially for acidic substances.
                    </div>
                </div>
            </div>

            <!-- FAQ 11 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false"
                        aria-controls="collapseEleven">
                        Is quartz cheaper than concrete?
                    </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Quartz countertops can be more expensive than concrete, depending on the quality, but offer more
                        durability and variety in design.
                    </div>
                </div>
            </div>

            <!-- FAQ 12 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false"
                        aria-controls="collapseTwelve">
                        Is quartz cheaper than marble?
                    </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Yes, quartz is generally more affordable than marble, which tends to be more expensive due to its
                        natural stone origin.
                    </div>
                </div>
            </div>

            <!-- FAQ 13 -->
            <div class="accordion-item bg-white">
                <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed bg-white text-dark" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false"
                        aria-controls="collapseThirteen">
                        How should quartz be cleaned?
                    </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body bg-white text-dark">
                        Clean quartz surfaces with warm water and a mild detergent. Avoid harsh chemicals or abrasive
                        materials.
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/images/argileimage/footerimge.jpg" alt="Quartz product" title="Quartz product"
                    class="img-fluid mb-5">
            </div>
            <div class="col-md-6">
                <h2>Let's Be in Touch !!!
                </h2>
                {{-- <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" placeholder="Your Name" required>
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" placeholder="name@example.com"
                            required>
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingContact" placeholder="Contact Number"
                            required>
                        <label for="floatingContact">Contact Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message" style="height: 150px;" required></textarea>
                        <label for="floatingMessage">Your Message</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form> --}}
                <form method="POST" id="contact-form">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingName" name="form_name" placeholder="Your Name" required>
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="form_email" placeholder="name@example.com"
                            required>
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingContact" name="form_phone" placeholder="Contact Number"
                            required>
                        <label for="floatingContact">Contact Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message" name="form_message"
                            style="height: 150px;" required></textarea>
                        <label for="floatingMessage">Your Message</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                </form>


            </div>

        </div>

    </div>
    </div>
    </div>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;

            // Check if all required fields are filled
            const isFormValid = form.checkValidity();

            // If the form is valid, change the button text to "Submitting..."
            if (isFormValid) {
                submitBtn.innerHTML = "Submitting...";
            } else {
                // If form is not valid, just return without making AJAX request
                return;
            }

            // Disable the button to prevent multiple submissions
            submitBtn.disabled = true;

            const formData = new FormData(form);

            fetch("{{ Route('send.mail') }}", {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Thank you!',
                            text: 'Your message has been sent successfully!',
                            icon: 'success',
                            confirmButtonText: 'OK',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text',
                                confirmButton: 'swal-button'
                            }
                        });

                        // Reset the form
                        form.reset();
                    }
                })
                .finally(() => {
                    // Re-enable the button and restore original text
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                });
        });
    </script>
@endsection
