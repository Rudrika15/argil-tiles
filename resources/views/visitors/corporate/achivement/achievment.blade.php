@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Explore Argil's achievements and
awards in the quartz manufacturing industry. See how we innovate and lead
with excellence." />
    <meta name="keywords"
        content="Argil Achievements, Quartz Awards,
Argil Tiles Success, Industrial Excellence, Company Milestones" />
    <meta property="og:title" content="Argil Group Achievements – Excellence
in Quartz Manufacturing">
    <meta property="og:description"
        content="Discover the milestones, awards,
and industry recognitions that define Argil Group’s success in artificial quartz
stone manufacturing. Our journey of excellence continues.">

    <meta property="og:url" content="https://argiltiles.com/achievements">
    <meta name="twitter:title" content="Argil Group Achievements – Excellence
 in Quartz Manufacturing">
    <meta name="twitter:description"
        content="Explore the awards,
certifications, and recognitions that showcase Argil Group’s commitment
to quality, innovation, and leadership in the artificial quartz industry.">

    <link rel="canonical" href="https://argiltiles.com/achievements" data-
    react-helmet="true">
    <title>Argil Achievements | Awards & Milestones in Quartz Industry</title>
@endsection
@section('lcp_preload')
    <link rel="preload" as="image" href="{{ asset('assets/asset/achievementimage1.jpeg') }}" fetchpriority="high">
@endsection
@section('content')
     <!-- breadcrumb -->
     <div class="breadcrumb d-flex justify-content-between align-items-center">
        <div class="container">

            <div class="p-2">
                <h1 class="display-6 fw-bold">Home / Achievments</h1>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="pt-5 pb-3 text-justify">The Founder has been in the business since last 60 years within which he
                    has scaled new heights regularly. He has been recognized a number times and mostly by credible
                    institutions including the government of India.

                </p>
            </div>
        </div>
        <div class="container py-4">
            <div class="row align-items-center mb-4">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ asset('assets/asset/achievementimage1.jpeg') }}" alt="National Award ceremony"
                        title="National Award" width="452" height="500" loading="eager" fetchpriority="high" decoding="async" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-md-8">
                    <h2 class="fw-bold">National Award</h2>
                    <p class="mb-0 text-justify">
                        In 1997, the company was honored with the prestigious National Award for Best Quality Products,
                        presented by the Vice President of India. This recognition marked a milestone in our journey,
                        celebrating dedication to product excellence, innovation, and quality assurance. The award reflects
                        a commitment to delivering products that meet and exceed industry standards, showcasing Indian
                        manufacturing capabilities on a national platform.
                    </p>
                    <p class="mb-0 text-justify">

                        Receiving the National Award is one of the highest accolades a manufacturer can achieve. For us,
                        it served as a powerful endorsement of our vision, technology-driven processes, and skilled
                        workforce. The recognition celebrated past achievements and motivated the team to keep raising the
                        bar in product development and customer satisfaction.
                    </p>
                    <p class="mb-0 text-justify">
                        The ceremony brought national attention to the brand, validating years of careful work and strong
                        quality control. It positioned the Group as a trusted name in the industry and opened doors for
                        growth, innovation, and expansion into new markets. Even today, this award remains a proud symbol of
                        our legacy and long-standing commitment to excellence in manufacturing.
                    </p>
                </div>
            </div>

            <div class="row align-items-center flex-md-row-reverse">
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <img src="{{ asset('assets/asset/achievementimage2.jpeg') }}" alt="Export Awards recognition"
                        title="Export Awards" loading="lazy" class="img-fluid rounded shadow-sm w-100">
                </div>
                <div class="col-md-8">
                    <h2 class="fw-bold">Export Awards</h2>
                    <p class="mb-0 text-justify">
                        We have also received Highest Export Awards from both the Government of India and the State
                        Government, recognising outstanding contribution to international trade. The accolade reflects
                        excellence in product quality, consistent export growth, and a growing global presence. By keeping
                        international standards, on-time delivery, and customer satisfaction at the centre, the company has
                        become a trusted name across borders. The award signals not only commercial success but also a role in
                        strengthening the economy and creating global value—a testament to vision, commitment, and leadership
                        in export manufacturing.
                    </p>
                </div>
            </div>
        </div>


    </div>
@endsection
