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
        {{-- <div class="client-image me-3">
            {{ strtoupper(substr($testimonial->client_name, 0, 1)) }}
        </div> --}}
        <img src="{{ asset('asset/images/default-user.png')}}"
     class="client-image me-3"
     alt="{{ $testimonial->client_name }}">
        
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

        <div class="text-center mt-4">
            <a href="{{ url('/testimonial') }}" class="btn-primary fw-bold text-decoration-none">
                View All Testimonials
            </a>
        </div>

    </div>