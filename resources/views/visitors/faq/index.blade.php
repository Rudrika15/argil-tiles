@extends('layouts.app')
@section('seosection')
    <meta name="description"
        content="Answers about engineered stone slabs, rigid-core vinyl, installation, care, and wholesale supply from our Morbi factory.">
    <meta name="keywords"
        content="engineered stone FAQ, rigid-core vinyl FAQ, surface care, countertop questions, Morbi manufacturer">
    <meta property="og:title" content="FAQ | Engineered Surfaces & Rigid-Core Vinyl">
    <meta property="og:description"
        content="Find answers about engineered stone, rigid-core vinyl, installation, and care from our Morbi manufacturing team.">
    <meta property="og:url" content="https://argiltiles.com/faq">
    <meta property="og:site_name" content="Mod Ceramic Industries">
    <link rel="canonical" href="https://argiltiles.com/faq">
    <title>FAQ | Engineered Surfaces & Rigid-Core Vinyl</title>
@endsection
@section('content')
    <div class="breadcrumb">
        <div class="container py-2">
            <h1 class="display-6 fw-bold">Frequently Asked Questions</h1>
        </div>
    </div>
    <div class="container pt-4">
        <h2 class="h5 fw-bold">How to use this FAQ</h2>
        <p class="text-muted mx-auto mb-0" style="max-width:760px;">
            Find clear answers about engineered stone slabs, rigid-core vinyl, installation basics, care routines,
            and wholesale supply from our Morbi factory. If your question is project-specific—custom sizes, export
            packaging, or certificate copies—use the contact form and our team will follow up with tailored guidance.
            Browse by topic below, expand any item for the full answer, and revisit this page as new product lines and
            installation recommendations are published. Looking for series-specific FAQs? Open an engineered stone or
            rigid-core product page to see questions filtered for that category. Still stuck? Email or call the display
            center and reference the FAQ topic so we can answer faster. Updated answers are reviewed whenever specifications
            or care guidance change. Bookmark this page when comparing materials for your next tender, renovation brief, or export quotation pack.
        </p>
    </div>
    @include('visitors.faq.list')
@endsection
