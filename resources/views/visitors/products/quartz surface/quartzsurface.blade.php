@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Premium engineered stone slabs for kitchen countertops, manufactured in Morbi, Gujarat. Explore high-quality designs.">
    <meta name="keywords"
        content="engineered stone slabs, kitchen countertops, Morbi manufacturer">
    <meta property="og:title" content="Engineered Stone Countertop Slabs | Morbi">
    <meta property="og:url" content="https://argiltiles.com/quartzsurface">
    <meta property="og:description"
        content="Premium engineered stone slabs for kitchens and platforms from Morbi. Explore designs and request a quote.">
    <meta name="twitter:title" content="Engineered Stone Countertop Slabs | Morbi">
    <meta name="twitter:description"
        content="Premium engineered stone slabs for kitchens and platforms from Morbi. Explore designs and request a quote.">
    <link rel="canonical" href="https://argiltiles.com/quartzsurface">
    <title>Engineered Stone Countertop Slabs | Morbi</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" fetchpriority="high">
@endsection

@section('content')
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Home / Engineered Stone</h1>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{ asset('asset/images/argileimage/quartzimage1.jpg') }}" alt="engineered stone slab"
                    title="Engineered stone slab" width="350" height="354" loading="eager" fetchpriority="high" decoding="async" class="img-fluid w-75 mb-5 mt-4">
            </div>
            <div class="col-md-6">
                <h2 class="mt-5 fw-bold">Overview</h2>
                <p class="text-justify">Engineered stone is a dense surface material that looks and performs much
                    like natural granite. It resists stains, scratches, and cracking, and handles everyday heat and cold.
                    Makers in India blend mineral aggregates with resins and pigments to form these man-made slabs—typically
                    about 90% pulverised natural mineral and 10% polyresin, with slight variation by grade. The finish stays
                    consistent and durable for kitchens, platforms, and commercial interiors.</p>
                <p class="text-muted">
                    Architects and fabricators choose engineered slabs when they need repeatable colour, non-porous hygiene,
                    and large formats for islands and reception desks. Explore the designs below, compare finishes, and
                    request a quote for residential or commercial volumes from our Morbi manufacturing team.
                </p>
            </div>
        </div>
    </div>


    <!-- Why Choose Us -->
    @include('visitors.comanfile.certificate')
    <!-- Why Choose Us -->


    <div class="container" id="images">


        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">Stone Slab Designs</h2>
            @foreach ($data as $index => $item)
                <div class="col-md-4 pt-5">
                    <a href="{{ Route('quartzinquiry', $item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('quartz/' . $item->mainImg) }}" class="card-img-top"
                                alt="{{ $item->name }}" title="{{ $item->name }}" loading="lazy" width="400" height="300" />
                            <div class="card-body">
                                <h3 class="card-title text-center">{{ $item->name }}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row">

            {{ $data->links('pagination::bootstrap-5') }}

        </div>
    </div>


    <!-- Usability Section -->
    @include('visitors.comanfile.usablity')
    <!-- Usability Section -->


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center fw-bold pt-5">Advantages of Engineered Stone</h2>
                <p class="text-center mt-4">
                    Engineered slabs are made from crushed natural mineral crystals bound with resin, unlike quarried sandstone,
                    marble, or granite that is cut from the earth. They can closely match natural looks while offering practical
                    upsides. Buyers choose premium-grade options from Indian makers for reasons such as:
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="main-container"> --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold pt-5">Attractive look and feel</h3>
                <p class="text-justify">Compressed engineered material is formed into slabs with natural-stone textures and
                    colours. Manufactured finishes tend to look more uniform than quarry stone. You can find a wide range of
                    imitation looks in colours that suit almost any décor.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold pt-2">Easy to maintain</h3>
                <p class="text-justify">Natural stone often has pores. A polished engineered surface does not absorb moisture
                    as readily, so cleaning is simpler and needs less special care. It also resists stains and scratches.
                    With easy upkeep, these slabs stay looking fresh for years.</p>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold pt-2">Available in a variety of options</h3>
                <p class="text-justify">Composite slabs come in many sizes, colours, treatments, and patterns, so you rarely
                    run short of options for a new design or renovation. Popular choices include Zodiac Black, Zodiac Red,
                    Crystal White, and more.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold pt-2">Cost effective</h3>
                <p class="text-justify">Natural stone pricing varies by type, colour, and grade and is often higher. Engineered
                    slabs can deliver a luxurious, classic look for less. Indian makers offer cost-effective ranges in many
                    colours and finishes.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="fw-bold pt-2">Durability</h3>
                <p class="text-justify">Engineered stone is as hard as granite, with strong chip and crack resistance when
                    installed correctly. Poor fitting—not the material itself—is the usual cause of cracks. With proper install
                    and simple care, these surfaces keep their look for years.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-4">
            <h2 class="text-center fw-bold pt-2">Uses and Applications</h2>
            <p class="text-center pt-2">Engineered stone is popular for many residential and commercial projects. Common uses
                include:</p>
        </div>
    </div>
    <div class="container quartz-paragraph1">
        <ul>
            <li>Long lifespan and low upkeep make it a strong choice for homes and workplaces that need a refined finish.
            </li>
            <li>Use it as a kitchen backsplash to help protect walls from spills and stains.
            </li>
            <li>Non-porous engineered slabs suit interior walls and wet areas; they are widely specified for kitchen platforms
                and damp rooms in homes and commercial buildings.
            </li>
        </ul>
    </div>


    <!-- Usability Section -->
    <div class="container-fluid parallax"
        style="background-image: url(./assets/asset/enhance-bg.999209ece5b0474be060.jpg); ">

        <div class="container">
            <div class="row py-5 text-center ">
                <div class="col-md-6 h">
                    <img src="{{ asset('asset/images/argileimage/quartzimage5.jpg') }}" alt="slab manufacturing process"
                        title="Slab manufacturing process" loading="lazy" class="img-fluid w-75 border rounded p-2" />
                </div>
                <div class="col-md-6">
                    <h2 class="text-center fw-bold text-white mt-2">How Our Slabs Are Made</h2>
                    <p class="text-justify text-white">Finely crushed mineral is combined with resin, stabilising polymers,
                        and colour pigments, then polished to a mirror finish. We focus on consistent quality so architects and
                        homeowners get reliable countertops and platforms.</p>
                    <p class="text-justify text-white">At our facility, we hold ourselves to high standards. Mixing, pressing, polishing,
                        and quality control follow strict routines so each slab meets the same finish and performance bar.
                    </p>
                </div>
            </div>
            <div class="row pb-5 g-4">
                <div class="col-md-3">
                    <div class="card text-center mt-3 h-100">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg1.png" alt="MIXING" title="MIXING"
                                loading="lazy" class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pt-1">MIXING</h3>
                            <p class="card-text pt-2">Core ingredients such as natural mineral grits, resin, colouring agents
                                (in traces), and texturizing material are tested, then blended in large overhead mixers. The same
                                fundamental process is used across colours and variants so results stay consistent from batch to
                                batch.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3 h-100">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg2.png" alt="PRESSING" title="PRESSING"
                                loading="lazy" class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pt-1">PRESSING</h3>
                            <p class="card-text pt-2">Spread onto trays, the mixture is compacted with intense vibration
                                and pressure. The compressed mixture is then transferred to a curing room, where it is
                                heated for about an hour at about 90°C before cooling. In this phase, the mixture's resin is
                                activated, binding the mineral into a slab with classic hardness and stain resistance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3 h-100">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg3.png" alt="POLISHING" title="POLISHING"
                                class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pt-1">POLISHING
                            </h3>
                            <p class="card-text pt-2">Using two sets of parallel diamond saws, the uneven slab's four sides
                                are now cut to the appropriate size. To achieve the precise needed thickness, the slab's
                                upper and lower surfaces are calibrated using a multi-head diamond calibration machine. And
                                a multi-head polishing machine is used to polish the finished surface until it has the
                                correct mirror glaze. What distinguishes the finished product is its mirror glaze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center mt-3 h-100">
                        <div class="d-flex justify-content-center mt-4">
                            <img src="asset/images/argileimage/quartz-bg4.png" alt="QUALITY CONTROL"
                                title="QUALITY CONTROL" class="card-img-top w-25">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title pt-1">QUALITY CONTROL</h3>
                            <p class="card-text pt-2 mb-5">Every step of the manufacturing process undergoes inspection at
                                our facility, from selecting the best raw materials to maintaining strict quality control
                                standards. Our Quality Control division inspects each slab for flaws and impurities. The
                                slabs are only sorted and marked for entry into our distribution system after they have
                                given their permission.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @include('visitors.faq.list')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="asset/images/argileimage/footerimge.jpg" alt="Engineered stone product" title="Engineered stone product"
                    class=" contact-image mb-5">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold">Let's Be in Touch !!!
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
                        <input type="text" class="form-control" id="floatingName" name="form_name"
                            placeholder="Your Name" required
                            oninvalid="this.setCustomValidity('The name field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingName">Your Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingEmail" name="form_email"
                            placeholder="name@example.com" required
                            oninvalid="this.setCustomValidity('The email field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingEmail">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" id="floatingContact" name="form_phone"
                            placeholder="Contact Number" required
                            oninvalid="this.setCustomValidity('The contact field is required.')"
                            oninput="this.setCustomValidity('')">
                        <label for="floatingContact">Contact Number</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="floatingMessage" placeholder="Your Message" name="form_message"
                            style="height: 150px;" required oninvalid="this.setCustomValidity('The message field is required.')"
                            oninput="this.setCustomValidity('')"></textarea>
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.pagination a').forEach(link => {
                // Avoid duplicate hashes
                if (!link.href.includes('#images')) {
                    link.href += '#images';
                }
            });
        });
    </script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "@@id": "https://argiltiles.com/quartzsurface#collection",
    "name": "Engineered Stone Collection",
    "description": "Explore premium engineered stone surfaces for residential and commercial applications.",
    "url": "https://argiltiles.com/quartzsurface",
    "isPartOf": {
        "@@type": "WebSite",
        "name": "Mod Ceramic Industries Ltd.",
        "url": "https://argiltiles.com/"
    },
    "mainEntity": {
        "@@type": "ItemList",
        "name": "Engineered Stone Products",
        "itemListElement": [
            @foreach($data->take(6) as $product)
            {
                "@@type": "ListItem",
                "position": {{ $loop->iteration }},
                "item": {
                    "@@type": "Product",
                    "name": {{ json_encode($product->name) }},
                    "image": "{{ asset('quartz/' . $product->mainImg) }}",
                    "url": "https://argiltiles.com/quartzinquiry/{{ $product->slug }}",
                    "brand": {
                        "@@type": "Brand",
                        "name": "Argil"
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
}
</script>
@endsection
