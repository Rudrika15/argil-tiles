    @extends('admin.layouts.app')

    @section('pageTitle','Dashboard')

<style>
    .ck-editor__editable_inline {
        min-height: 200px;
    }
</style>
    @section('content')

   {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

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

        <form class="form-group" enctype="multipart/form-data" action="{{route('admin.case_studies.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input id="title" type="text" name="title" class="form-control" placeholder="title" >
                        <label for="form_firstname">title</label>
                          @error('title')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <input type="hidden" name="slug" id="slug">

                    <div class="form-label-group">
                        <input id="short_description" type="text" name="short_description" class="form-control" placeholder="title" >
                        <label for="form_firstname">Short Description</label>
                          @error('short_description')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    {{-- <div class="form-label-group">
                         <textarea id="form_firstname" name="description" class="form-control" placeholder="Description"></textarea>
                    </div> --}}

                    <div class="form-label-group">
                        <textarea id="overview" name="overview" class="form-control" placeholder="Overview"></textarea>
                          @error('overview')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <input id="client_name" type="text" name="client_name" class="form-control" placeholder="Client Name" >
                        <label for="form_firstname">Client Name</label>
                          @error('client_name')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <input id="industry" type="text" name="industry" class="form-control" placeholder="Industry" >
                        <label for="form_firstname">Industry</label>
                          @error('industry')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <input id="location" type="text" name="location" class="form-control" placeholder="Location" >
                        <label for="form_firstname">Location</label>
                          @error('location')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    
                    <div class="form-label-group">
                        <input id="project_type" type="text" name="project_type" class="form-control" placeholder="Project Type" >
                        <label for="form_firstname">Project Type</label>
                          @error('project_type')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <input id="project_area" type="text" name="project_area" class="form-control" placeholder="Project Area" >
                        <label for="form_firstname">Project Area</label>
                          @error('project_area')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>


                    <div class="form-label-group">
                        <textarea id="challenge" name="challenge" class="form-control" placeholder="Challenge"></textarea>
                          @error('challenge')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <textarea id="solution" name="solution" class="form-control" placeholder="Solution"></textarea>
                          @error('solution')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                         <textarea id="result" name="result" class="form-control" placeholder="Result"></textarea>
                           @error('result')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <input id="product_used" type="text" name="products_used" class="form-control" placeholder="Product Used" >
                        <label for="form_firstname">Product Used</label>
                          @error('product_used')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>      

                    <div class="form-label-group">
                        <input id="completion_date" type="date" name="completion_date" class="form-control" placeholder="Project Area" >
                        <label for="form_firstname">Completion Date</label>
                          @error('completion_date')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
    <input id="featured_image" type="file" name="featured_image" class="form-control" accept="image/*" >
    <label>Featured Image</label>
      @error('featured_image')
    <span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="mt-3">
    <img id="featured-preview"
         src=""
         class="img-thumbnail"
         style="max-width:250px;display:none;">
</div>

                    <div class="mb-3">
            <label>Gallery Images</label>
            <div class="mb-3">
    <label>Gallery Images</label>
    <input type="file"
           name="gallery[]"
           class="form-control"
           multiple
           accept="image/*">
</div> <small class="text-muted">You can select multiple images</small>
  @error('gallery')
    <span class="text-danger">{{ $message }}</span>
@enderror
        </div>

<div id="gallery-preview" class="row mt-3"></div>

                    <div class="form-label-group">
                        <select name="status" id="status" class="form-control" >
                             <option value="" disabled selected>Status</option>
                             <option value="published">Published</option>
                             <option value="draft">Draft</option>
                        </select>
                          @error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-check mb-3">
                        <input type="checkbox" name="is_featured" value="1" class="form-check-input"> 
                        <label class="form-check-label"> Featured Case Study </label> 
                        
                    </div>

                </div>
            </div>

            <h4 class="mb-4">Add Meta Properties for Case Study</h4>

    {{-- Meta title --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                SEO Title
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="seo_title" placeholder="" name="seo_title"
                        value="{{ old('seo_title') }}">
                    <label for="">SEO Title</label>
                      @error('seo_title')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
            </div>
        </div>

        {{-- Meta Keywords --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Keywords
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="seo_keywords" placeholder="SEO Keyword" name="seo_keywords"
                        value="{{ old('seo_keywords') }}">
                    <label for="">SEO keywords</label>
                      @error('seo_keywords')
    <span class="text-danger">{{ $message }}</span>
@enderror
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
                        name="seo_description" value="{{ old('seo_description') }}">
                    <label for="">SEO Description</label>
                      @error('description')
    <span class="text-danger">{{ $message }}</span>
@enderror
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
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

titleInput.addEventListener('input', function () {
    slugInput.value = this.value
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-');
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

    const featured = document.getElementById('featured_image');

    if (featured) {
        featured.addEventListener('change', function (e) {

            if (!e.target.files.length) return;

            let reader = new FileReader();

            reader.onload = function (event) {
                let preview = document.getElementById('featured-preview');
                preview.src = event.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(e.target.files[0]);
        });
    }

});
<script>
document.addEventListener("DOMContentLoaded", function () {

    const galleryInput = document.querySelector('input[name="gallery[]"]');

    if (galleryInput) {
        galleryInput.addEventListener('change', function (event) {

            const files = event.target.files;
            const container = document.getElementById('gallery-preview');

            container.innerHTML = '';

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
</script>
    @endsection
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
