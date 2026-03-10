@extends('layouts.app')
@section('seosection')

    <meta name="description"
        content="High-quality SPC flooring tiles by Argil.
Durable, waterproof, and stylish SPC flooring solutions from top manufacturers
in Morbi, Gujarat, India." />

    <meta name="keywords"
        content="SPC flooring, vinyl flooring, SPC vinyl flooring, SPC flooring manufacturer, 
        vinyl flooring manufacturer, SPC flooring supplier, vinyl flooring supplier, SPC flooring India,
        vinyl flooring India, SPC flooring Morbi, vinyl flooring Morbi, stone plastic composite flooring, 
        rigid core SPC flooring, luxury vinyl flooring, vinyl plank flooring, waterproof SPC flooring, waterproof vinyl flooring,
        premium SPC flooring, premium vinyl flooring, SPC flooring for homes, vinyl flooring for homes, SPC flooring for commercial, 
        vinyl flooring for commercial "/>

    <meta name="author" content="Argil Group – Innovators in SPC Flooring &
Surface Solutions">
    <meta property="og:title"
        content="Quartz Stone Slab For Kitchen Platform
Countertops Manufacturers In Morbi, Gujarat, India | Argil"
        data-react-helmet
="true">
    <meta property="og:url" content="https://argiltiles.com/spcproducts" data- react-helmet="true">
    <meta property="og:description"
        content="Argil is SPC flooring tiles
manufacturers in Morbi, Gujarat, India. We are the best SPC flooring brands
with 10+ yrs of service. Get a price quote "
        data-react-helmet="true">
    <meta name="twitter:title" content="SPC Flooring Tiles Manufacturers In Morbi,
 Gujarat, India | Argil"
        data-react-helmet="true">
    <meta name="twitter:description"
        content="Argil is SPC flooring tiles
manufacturers in Morbi, Gujarat, India. We are the best SPC flooring brands
with 10+ yrs of service. Get a price quote"
        data-react-helmet="true">
    <link rel="canonical" href="https://argiltiles.com/spcproducts" data-react- helmet="true">
    <title>Best SPC Flooring Tiles Manufacturer in Morbi, India | Argil</title>
@endsection
@section('content')
    <!-- breadcrumb -->
    <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / SPC Products</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">

        <div class="container">
            <div class="row pt-3">
                <div class="col-md-4">

                    <img src="{{ asset('asset/images/argileimage/spc1.jpg') }}" alt="argil spc product"
                        title="argil spc product" loading="lazy" class="img-fluid">

                </div>
                <div class="col-md-8">
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
                </div>
            </div>

        </div>

        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12 pt-4">
                    <img src="spc\spc2.jpg" alt="argil spc product" title="argil spc product" loading="lazy"
                        class="img-fluid">
                </div>
            </div>
        </div> --}}
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <video autoplay muted loop playsinline class="w-100">
                        <source src="{{ asset('assets/asset/video1.mp4') }}" type="video/mp4" />
                    </video>
                </div>
                <div class="col-md-4 mt-4">
                    <video autoplay muted loop playsinline class="w-100">
                        <source src="{{ asset('assets/asset/video 2.mp4') }}" type="video/mp4" />
                    </video>
                </div>
                <div class="col-md-4 mt-4">
                    <video autoplay muted loop playsinline class="w-100">
                        <source src="{{ asset('assets/asset/video3.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div> --}}

        <div class="row pb-5">
            <h2 class="text-center fw-bold pt-5">SPC Flooring Tiles</h2>

            @foreach ($data as $index => $item)
                <div class="col-md-4 pt-5">
                    <a href="{{ Route('spcproductinquiry', $item->slug) }}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{ asset('spc/' . $item->mainImg) }}" class="card-img-top" alt="{{ $item->slug }}"
                                title="{{ $item->slug }}" loading="lazy" />
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $item->names }}</h5>
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
@endsection
