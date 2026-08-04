@extends('layouts.app')
@section('seosection')

    <meta name="description"
        content="Durable, waterproof rigid-core vinyl from Morbi, Gujarat. Premium designs for homes and commercial spaces." />

    <meta name="keywords"
        content="rigid-core vinyl, waterproof floor covering, Morbi manufacturer"/>

    <meta name="author" content="Surface Manufacturer">
    <meta property="og:title"
        content="Rigid-Core Vinyl Manufacturer | Morbi"
        data-react-helmet
="true">
    <meta property="og:url" content="https://argiltiles.com/spcproducts">
    <meta property="og:description"
        content="Premium rigid-core vinyl from Morbi, Gujarat. Durable, waterproof floor covering with 10+ years of expertise. Get a quote."
        data-react-helmet="true">
    <meta name="twitter:title" content="Rigid-Core Vinyl Manufacturer | Morbi"
        data-react-helmet="true">
    <meta name="twitter:description"
        content="Premium rigid-core vinyl from Morbi, Gujarat. Durable, waterproof floor covering with 10+ years of expertise. Get a quote."
        data-react-helmet="true">
    <link rel="canonical" href="https://argiltiles.com/spcproducts">
    <title>Rigid-Core Vinyl Manufacturer | Morbi</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('asset/images/argileimage/spc1.jpg') }}" fetchpriority="high">
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Home / Rigid-Core Vinyl</h1>
        </div>
    </div>
    <div class="container">
            <div class="row pt-3">
                <div class="col-md-4">
                    <img src="{{ asset('asset/images/argileimage/spc1.jpg') }}" alt="rigid-core vinyl product"
                        title="Rigid-core vinyl product" width="350" height="354" loading="eager" fetchpriority="high" decoding="async" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <p class="text-justify">Stone Plastic Composite is a modern rigid-core vinyl covering made from limestone
                        powder, PVC, and stabilizers. <span id="products">It</span> resists water well, so it suits kitchens,
                        bathrooms, and other damp rooms. The solid core stays stable under foot traffic and shrugs off dents
                        and scratches. A click-lock profile installs without glue or nails. Typical layers include a wear coat,
                        decorative film, rigid core, and underlayment for quieter steps and comfort. Many looks echo wood or
                        natural stone, and routine cleaning stays simple for homes and commercial spaces.</p>
                    <p class="text-muted">
                        Specifiers choose these planks when they need waterproof performance without the weight of ceramic
                        tile, plus faster installation on renovation timelines. Browse the designs below for tone and texture,
                        then open a product page for thickness, wear layer, and MOQ details—or request a quote for project
                        and export volumes from our Morbi plant.
                    </p>
                    <p class="text-muted">
                        Rigid-core vinyl suits apartments, villas, offices, boutiques, and hospitality corridors where moisture
                        resistance and dimensional stability matter. Decorative films recreate oak, walnut, marble, and concrete
                        looks while the limestone-rich core helps reduce telegraphing of minor subfloor imperfections. Pair the
                        right wear layer with your traffic level, confirm underlayment needs for acoustic comfort, and plan
                        expansion gaps according to room size and climate.
                    </p>
                    <p class="text-muted">
                        For multi-unit or export orders, share destination country, preferred thickness, and packaging notes
                        early. Our team can advise on container mixes across décors, private labeling options, and documentation
                        that distributors typically request for customs clearance. Sample planks and technical data sheets
                        are available for critical colour approvals before you commit to full production quantities.
                    </p>
                </div>
            </div>

        {{-- Commented media blocks removed from render path to keep HTML lean --}}

        <div class="row pb-4">
            <div class="col-lg-10 mx-auto">
                <h2 class="h5 fw-bold">Buying guide</h2>
                <p class="text-muted mb-0">
                    Match décor and wear layer to the room: kitchens and bathrooms favour waterproof cores; living areas
                    often prioritise warmer wood tones; retail floors need higher wear ratings. Confirm underlayment and
                    expansion gaps with your installer, then lock thicknesses and MOQs with our Morbi export desk.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">Rigid-Core Vinyl Designs</h2>
            <p class="text-center text-muted col-lg-8 mx-auto mb-2">
                Select a décor to view thickness options, wear layers, and inquiry details. Each design is manufactured
                for waterproof performance in homes and commercial interiors, with finishes suited to modern specifications.
                Need help choosing between wood and stone looks? Share room photos and traffic level with our team for a
                practical shortlist.                 Technical data sheets can accompany sample packs for site approvals. Scroll the grid to compare looks,
                then request a quote when your shortlist is ready.                 Domestic and export MOQs are confirmed on enquiry for every listed décor in this collection.
            </p>

            @foreach ($data as $index => $item)
                <div class="col-md-4 pt-5">
                    <a href="{{ Route('spcproductinquiry', $item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('spc/' . $item->mainImg) }}" class="card-img-top" alt="{{ $item->slug }}"
                                title="{{ $item->slug }}"
                                @if ($index === 0) loading="eager" fetchpriority="high" decoding="async" @else loading="lazy" @endif />
                            <div class="card-body">
                                <h3 class="card-title text-center">{{ $item->names }}</h3>
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

     @include('visitors.faq.list')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.pagination a').forEach(link => {
                // Avoid duplicate hashes
                if (!link.href.includes('#products')) {
                    link.href += '#products';
                }
            });
        });
    </script>

<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "@@id": "https://argiltiles.com/spcproducts#collection",
    "name": "Rigid-Core Vinyl Collection",
    "description": "Explore premium rigid-core vinyl products for residential and commercial applications.",
    "url": "https://argiltiles.com/spcproducts",
    "isPartOf": {
        "@@type": "WebSite",
        "name": "Mod Ceramic Industries",
        "url": "https://argiltiles.com/"
    },
    "mainEntity": {
        "@@type": "ItemList",
        "name": "Rigid-Core Vinyl Products",
        "itemListElement": [
            @foreach($data->take(6) as $product)
            {
                "@@type": "ListItem",
                "position": {{ $loop->iteration }},
                "item": {
                    "@@type": "Product",
                    "name": {{ json_encode(\App\Support\SeoCopy::soften($product->names)) }},
                    "image": "{{ asset('spc/' . $product->mainImg) }}",
                    "url": "https://argiltiles.com/spcproductinquiry/{{ $product->slug }}",
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
