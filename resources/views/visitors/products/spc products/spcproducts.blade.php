@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="High-quality SPC flooring tiles by Argil. Durable, waterproof vinyl flooring from manufacturers in Morbi, Gujarat, India.">

    <meta name="keywords"
        content="SPC flooring, vinyl flooring, SPC flooring manufacturer, waterproof SPC flooring, SPC flooring Morbi, Argil Tiles">

    <meta name="author" content="Argil Group – Innovators in SPC Flooring & Surface Solutions">
    <meta property="og:title"
        content="Best SPC Flooring Tiles Manufacturer in Morbi | Argil Tiles">
    <meta property="og:url" content="https://argiltiles.com/spcproducts">
    <meta property="og:description"
        content="High-quality SPC flooring tiles by Argil. Durable, waterproof vinyl flooring from manufacturers in Morbi, Gujarat, India.">
    <meta name="twitter:title" content="Best SPC Flooring Tiles Manufacturer in Morbi | Argil Tiles">
    <meta name="twitter:description"
        content="High-quality SPC flooring tiles by Argil. Durable, waterproof vinyl flooring from manufacturers in Morbi, Gujarat, India.">
    <link rel="canonical" href="https://argiltiles.com/spcproducts">
    <title>Best SPC Flooring Tiles Manufacturer in Morbi | Argil Tiles</title>
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
                        <div class="card h-100 shadow-sm overflow-hidden">
                            <img src="{{ asset('spc/' . $item->mainImg) }}" class="card-img-top spc-card-img" alt="{{ $item->slug }}"
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

     @include('visitors.faq.index')

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
