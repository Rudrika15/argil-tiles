    @extends('admin.layouts.app')

    @section('pageTitle','Dashboard')

<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
    @section('content')

    {{-- <div class="row">
        <div class="col-md-12">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{$message}}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
    </div> --}}

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="float-left">
                    <h2>Case Study Create</h2>
                </div>
                <div class="float-right">
                    <a href="{{route('admin.case_studies.index')}}" class="btn btn-success mb-2">Back</a>
                </div>
            </div>
        </div>

        <form class="form-group" enctype="multipart/form-data" action="{{route('admin.case_studies.update',$caseStudy->slug)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input id="title" type="text" name="title" class="form-control" placeholder="title" required value="{{$caseStudy->title}}">
                        <label for="form_firstname">title</label>
                    </div>

                    <input type="hidden" name="slug" id="slug" value="{{ $caseStudy->slug }}">

                    <div class="form-label-group">
                        <input id="short_description" type="text" name="short_description" class="form-control" placeholder="title" required  value="{{$caseStudy->short_description}}">
                        <label for="form_firstname">Short Description</label>
                    </div>

                    {{-- <div class="form-label-group">
                         <textarea id="form_firstname" name="description" class="form-control" placeholder="Description"></textarea>
                    </div> --}}

                    <div class="form-label-group">
                        <textarea id="overview" name="overview" class="form-control" placeholder="Overview">{{ old('overview', $caseStudy->overview) }}</textarea>
                    </div>

                    <div class="form-label-group">
                        <input id="client_name" type="text" name="client_name" class="form-control" placeholder="Client Name" required value="{{$caseStudy->client_name}}">
                        <label for="form_firstname">Client Name</label>
                    </div>

                    <div class="form-label-group">
                        <input id="industry" type="text" name="industry" class="form-control" placeholder="Industry" required value="{{$caseStudy->industry}}">
                        <label for="form_firstname">Industry</label>
                    </div>

                    <div class="form-label-group">
                        <input id="location" type="text" name="location" class="form-control" placeholder="Location" required value="{{$caseStudy->location}}">
                        <label for="form_firstname">Location</label>
                    </div>

                    

                    <div class="form-label-group">
                        <input id="project_type" type="text" name="project_type" class="form-control" placeholder="Project Type" required value="{{$caseStudy->project_type}}">
                        <label for="form_firstname">Project Type</label>
                    </div>

                    <div class="form-label-group">
                        <input id="project_area" type="text" name="project_area" class="form-control" placeholder="Project Area" required value="{{$caseStudy->project_area}}">
                        <label for="form_firstname">Project Area</label>
                    </div>

                    <div class="form-label-group">
                        <textarea id="challenge" name="challenge" class="form-control" placeholder="Challenge">{{ old('challenge', $caseStudy->challenge) }}</textarea>
                    </div>

                    <div class="form-label-group">
                        <textarea id="solution" name="solution" class="form-control" placeholder="Solution">{{ old('solution', $caseStudy->solution) }}</textarea>
                    </div>

                    <div class="form-label-group">
                         <textarea id="result" name="result" class="form-control" placeholder="Result">{{ old('result', $caseStudy->result) }}</textarea>
                    </div>

                    <div class="form-label-group">
                        <input id="product_used" type="text" name="products_used" class="form-control" placeholder="Project Used" required value="{{$caseStudy->products_used}}">
                        <label for="form_firstname">Product Used</label>
                    </div>
                    
                    <div class="form-label-group">
                        <input id="completion_date" type="date" name="completion_date" value="{{$caseStudy->completion_date}}" class="form-control" placeholder="Project Area" required>
                        <label for="form_firstname">Completion Date</label>
                    </div>

                    <div class="form-label-group">
                        @if($caseStudy->featured_image)
    <div class="mb-3">
        <img src="{{ asset('featured-image/' . $caseStudy->featured_image) }}"
     width="150"
     class="img-thumbnail">
    </div>
@endif
                        <input id="featured_image" type="file" name="featured_image" class="form-control" placeholder="Featured Image" >
                        <label for="form_firstname">Featured Image</label>
                    </div>

                     <div class="form-label-group">
                        @php
    $gallery = json_decode($caseStudy->gallery, true);
@endphp

@if(!empty($gallery))
    <div class="row mb-3">
        @foreach($gallery as $image)
            <div class="col-md-2">
                <img src="{{ asset('gallery-image/' . $image) }}"
                     class="img-thumbnail"
                     width="120">
            </div>
        @endforeach
    </div>
@endif
                        <div class="mb-3">
    <label>Gallery Images</label>
    <input type="file"
           name="gallery[]"
           class="form-control m-2"
           multiple
           accept="image/*">
</div>
<label for="form_firstname">Gallery</label>
                     </div>

                    <div class="form-label-group">
                        <select name="status" class="form-control">
    <option value="published"
        {{ $caseStudy->status == 'published' ? 'selected' : '' }}>
        Published
    </option>

    <option value="draft"
        {{ $caseStudy->status == 'draft' ? 'selected' : '' }}>
        Draft
    </option>
</select>
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" name="is_featured" value="1" class="form-check-input" {{ $caseStudy->is_featured ? 'checked' : '' }}> 
                        <label class="form-check-label"> Featured Case Study </label> 
                    </div>

                </div>
            </div>

            <h4 class="mb-4">Add Meta Properties for Case Study</h4>

    {{-- Meta title --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                meta title
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="seo_title" placeholder="" name="seo_title"
                        value="{{ old('seo_title',$caseStudy->seo_title) }}">
                    <label for="">SEO Title</label>
                </div>
            </div>
        </div>

        {{-- Meta Keywords --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Keyword
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="seo_keyword" placeholder="SEO Keyword" name="seo_keywords"
                        value="{{ old('seo_keywords',$caseStudy->seo_keywords) }}">
                    <label for="">SEO keywords</label>
                </div>
            </div>
        </div>

        {{-- Meta Description --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Description
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="seo_description" placeholder="SEO Description"
                        name="seo_description" value="{{ old('seo_description',$caseStudy->seo_description) }}">
                    <label for="">SEO Description</label>
                </div>
            </div>
        </div>

        
        <div class="text-center form-action">
                    <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
                </div>

    </div>
</form>


    <script>
        function readURL(input, tgt) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector(tgt).setAttribute("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const titleInput = document.getElementById('name');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function () {
                let slug = this.value.replace(/\s+/g, '-');
                slugInput.value = slug;
            });
        });
    </script>
    
    <script>
       document.addEventListener("DOMContentLoaded", function() {

    ClassicEditor
        .create(document.querySelector('#overview'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#challenge'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#solution'))
        .catch(error => {
            console.error(error);
        });
     ClassicEditor
        .create(document.querySelector('#result'))
        .catch(error => {
            console.error(error);
        });

});
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {

    const galleryInput = document.querySelector('input[name="gallery[]"]');
    const container = document.getElementById('gallery-preview');

    if (galleryInput) {
        galleryInput.addEventListener('change', function (event) {

            const files = event.target.files;

            Array.from(files).forEach(file => {

                const reader = new FileReader();

                reader.onload = function (e) {

                    const col = document.createElement('div');
                    col.classList.add('col-md-3', 'mb-2');

                    col.innerHTML = `
                        <img src="${e.target.result}"
                             class="img-thumbnail"
                             style="width:100%; height:150px; object-fit:cover;">
                    `;

                    container.appendChild(col);
                };

                reader.readAsDataURL(file);
            });
        });
    }

});

    @endsection
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
