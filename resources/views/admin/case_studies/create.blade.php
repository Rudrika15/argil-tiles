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

        <form class="form-group" enctype="multipart/form-data" action="{{route('admin.case_studies.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input id="title" type="text" name="title" class="form-control" placeholder="title" required>
                        <label for="form_firstname">title</label>
                    </div>

                    <input type="hidden" name="slug" id="slug">

                    <div class="form-label-group">
                        <input id="short_description" type="text" name="short_description" class="form-control" placeholder="title" required>
                        <label for="form_firstname">Short Description</label>
                    </div>

                    {{-- <div class="form-label-group">
                         <textarea id="form_firstname" name="description" class="form-control" placeholder="Description"></textarea>
                    </div> --}}

                    <div class="form-label-group">
                        <textarea id="overview" name="overview" class="form-control" placeholder="Overview"></textarea>
                    </div>

                    <div class="form-label-group">
                        <input id="client_name" type="text" name="client_name" class="form-control" placeholder="Client Name" required>
                        <label for="form_firstname">Client Name</label>
                    </div>

                    <div class="form-label-group">
                        <input id="industry" type="text" name="industry" class="form-control" placeholder="Industry" required>
                        <label for="form_firstname">Industry</label>
                    </div>

                    <div class="form-label-group">
                        <input id="location" type="text" name="location" class="form-control" placeholder="Location" required>
                        <label for="form_firstname">Location</label>
                    </div>

                    
                    <div class="form-label-group">
                        <input id="project_type" type="text" name="project_type" class="form-control" placeholder="Project Type" required>
                        <label for="form_firstname">Project Type</label>
                    </div>

                    <div class="form-label-group">
                        <input id="project_area" type="text" name="project_area" class="form-control" placeholder="Project Area" required>
                        <label for="form_firstname">Project Area</label>
                    </div>


                    <div class="form-label-group">
                        <textarea id="challenge" name="challenge" class="form-control" placeholder="Challenge"></textarea>
                    </div>

                    <div class="form-label-group">
                        <textarea id="solution" name="solution" class="form-control" placeholder="Solution"></textarea>
                    </div>

                    <div class="form-label-group">
                         <textarea id="result" name="result" class="form-control" placeholder="Result"></textarea>
                    </div>

                    <div class="form-label-group">
                        <input id="product_used" type="text" name="products_used" class="form-control" placeholder="Product Used" required>
                        <label for="form_firstname">Product Used</label>
                    </div>      

                    <div class="form-label-group">
                        <input id="completion_date" type="date" name="completion_date" class="form-control" placeholder="Project Area" required>
                        <label for="form_firstname">Completion Date</label>
                    </div>

                    <div class="form-label-group">
                        <input id="featured_image" type="file" name="featured_image" class="form-control" placeholder="Featured Image" required>
                        <label for="form_firstname">Featured Image</label>
                    </div>

                     <div class="form-label-group">
                        <input type="file" name="gallery[]" multiple class="form-control" placeholder="Gallery" required>
                        <label for="form_firstname">Gallery</label>
                     </div>

                    <div class="form-label-group">
                        <select name="status" id="status" class="form-control" required>
                             <option value="" disabled selected>Status</option>
                             <option value="published">Published</option>
                             <option value="draft">Draft</option>
                        </select>
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
    slugInput.value = this.value
        .toLowerCase()
        .trim()
        .replace(/[^a-z0-9\s-]/g, '')
        .replace(/\s+/g, '-');
});
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

    @endsection
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
