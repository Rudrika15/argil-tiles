  <div class="container my-5">
    <div class="text-center mb-5">
                <p class="text-uppercase fw-bold ls-2 mb-2" style="color: #ccb19b; letter-spacing: 2px;">Support Center</p>
                <h2 class="display-6 fw-bold text-dark">Frequently Asked Questions</h2>
                <div class="mx-auto mt-3" style="width: 50px; height: 3px; background-color: #ccb19b !important;"></div>
            </div>

    <div class="accordion" id="accordionExample">

        @foreach ($faqs as $faq)
            @php
                $id = $loop->index;
            @endphp

            <div class="accordion-item bg-white">

                <h3 class="accordion-header" id="heading{{ $id }}">
                    <button class="accordion-button collapsed bg-white text-dark"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse{{ $id }}"
                        aria-expanded="false"
                        aria-controls="collapse{{ $id }}">
                        {{ \App\Support\SeoCopy::soften($faq->question) }}
                    </button>
                </h3>

                <div id="collapse{{ $id }}"
                    class="accordion-collapse collapse"
                    aria-labelledby="heading{{ $id }}"
                    data-bs-parent="#accordionExample">

                    <div class="accordion-body bg-white text-dark">
                        {{ \App\Support\SeoCopy::soften($faq->answer) }}
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</div>

@if(isset($faqs) && $faqs->count())
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $index => $faq)
        {
            "@@type": "Question",
            "name": {{ json_encode(\App\Support\SeoCopy::soften($faq->question)) }},
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": {{ json_encode(\App\Support\SeoCopy::soften(preg_replace('/\s+/', ' ', trim(strip_tags($faq->answer))))) }}
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
