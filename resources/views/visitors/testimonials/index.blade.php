@extends('layouts.app')
<style>
   
.testimonial-card{
    position:relative;
    background:#fff;
    border:none;
    border-top:4px solid #d4b59e;
    border-radius:0;
    padding:15px;
    transition:all .3s ease;
    overflow:hidden;
}

.testimonial-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.testimonial-card::before{
    content:"❝";
    position:absolute;
    top:10px;
    right:20px;
    font-size:70px;
    line-height:1;
    color:rgba(212,181,158,.15);
    font-family:serif;
}

.testimonial-rating{
    color:#d4b59e;
    font-size:15px;
    margin-bottom:15px;
}

.testimonial-text{
    color:#555;
    line-height:1.8;
    font-size:15px;
    min-height:130px;
}
.client-image{
    width:60px;
    height:60px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#d4b59e; /* Change to your preferred color */
    color:#fff;
    font-size:24px;
    font-weight:700;
    object-fit:cover;
    flex-shrink:0;
}

.client-name{
    font-size:16px;
    font-weight:600;
    color:#222;
}

.client-designation{
    font-size:13px;
    color:#777;
}

.client-company{
    font-size:13px;
    color:#999;
}

.testimonial-section{
    background:#fafafa;
}
    .resource-card{
    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:15px 18px;

    border-left:3px solid #d4b59e;
    background:#f8f8f8;

    text-decoration:none;
    color:#222;

    transition:.3s;
    height:100%;
    
}

.resource-card:hover{
    background:#d4b59e;
    color:#fff;
    transform:translateY(-3px);
}

.resource-card i{
    font-size:18px;
}
</style>
@section('content')

<section class="py-5">
    {{-- <div class="container">

        <h1 class="text-center mb-5">Testimonials</h1>

        <div class="row">

            @foreach($testimonials as $testimonial)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <div class="card-body">

                            <p>{{ $testimonial->message }}</p>

                            <h5>{{ $testimonial->name }}</h5>

                            <small>{{ $testimonial->designation }}</small>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </div> --}}
    <div class="breadcrumb d-flex justify-content-between align-items-center">
    <div class="container">
        <div class="p-2">
            <h1 class="display-6 fw-bold text-center">
                Testimonials
            </h1>
        </div>  
    </div>
</div>
    <div class="container py-5">

        <div class="text-center mb-5">
            <h2 class="fw-bold">What Our Clients Say</h2>
            <p class="text-muted">
                Trusted by architects, builders, interior designers, and project developers.
            </p>
        </div>

        <div class="row">

            @foreach($testimonials as $testimonial)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card testimonial-card h-100">

    <div class="card-body">

        <div class="testimonial-rating">
            @for($i = 1; $i <= $testimonial->rating; $i++)
                <i class="bi bi-star-fill"></i>
            @endfor
        </div>

        <p class="testimonial-text">
            {{ strip_tags($testimonial->testimonial) }}
        </p>

        <div class="d-flex align-items-center mt-2">
@if($testimonial->client_image)
    <img src="{{ asset('testimonial-image/'.$testimonial->client_image) }}"
         class="client-image me-3"
         alt="{{ $testimonial->client_name }}">
@else
    <div class="client-image me-3">
        {{ strtoupper(substr(trim($testimonial->client_name), 0, 1)) }}
    </div>
@endif


            <div>
                <div class="client-name">
                    {{ $testimonial->client_name }}
                </div>

                @if($testimonial->designation)
                    <div class="client-designation">
                        {{ $testimonial->designation }}
                    </div>
                @endif

                @if($testimonial->company_name)
                    <div class="client-company">
                        {{ $testimonial->company_name }}
                    </div>
                @endif
            </div>

        </div>

    </div>

</div>
            </div>

            @endforeach

        </div>

        

    </div>
</section>

@endsection