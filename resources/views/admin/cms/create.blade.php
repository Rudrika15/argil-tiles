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
                    <h2>CMS Create</h2>
                </div>
                <div class="float-right">
                    <a href="{{route('admin.cms.index')}}" class="btn btn-success mb-2">Back</a>
                </div>
            </div>
        </div>

        <form class="form-group" enctype="multipart/form-data" action="{{route('admin.cms.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-label-group">
                        <input id="name" type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="title" >
                        <label for="form_firstname">title</label>
                        @error('title')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <input type="hidden" name="slug" id="slug">


                    {{-- <div class="form-label-group">
                        <input id="form_firstname" type="text" name="description" class="form-control" placeholder="Description" required>
                        <label for="form_firstname">Description</label>
                    </div> --}}

                    <div class="form-label-group">
                         <textarea id="form_firstname" name="description" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                         @error('description')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>

                    <div class="form-label-group">
                        <select name="status" id="status" class="form-control" >
                             <option value="" disabled selected>Status</option>
                             <option value="1">Active</option>
                             <option value="0">Inactive</option>
                        </select>
                        @error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>
                </div>
            </div>

            <h4 class="mb-4">Add Meta Properties for CMS</h4>

    {{-- Meta title --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                meta title
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="meta_title" placeholder="" name="meta_title"
                        value="{{ old('meta_title') }}">
                    <label for="">Title</label>
                    @error('meta_title')
    <span class="text-danger">{{ $message }}</span>
@enderror
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
                    <input type="text" class="form-control" id="meta_keyword" placeholder="Meta Keyword" name="meta_keyword"
                        value="{{ old('meta_keyword') }}">
                    <label for="">keywords</label>
                    @error('meta_keyword')
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
                    <input type="text" class="form-control" id="meta_description" placeholder="Meta Description"
                        name="meta_description" value="{{ old('meta_description') }}">
                    <label for="">description</label>
                    @error('meta_description')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
            </div>
        </div>

        {{-- OG Image --}}
        <div class="row mb-3">
            <div class="col-md-3">
                <img id="ogImagePreview"
                    src="{{ asset('slider/image_default.png') }}"
                    width="150"
                    height="100"
                    alt="Preview">
            </div>

            <div class="col-md-9">
                <label>OG Image</label>
                <input type="file"
                    name="og_image"
                    id="og_image"
                    class="form-control"
                    accept="image/*"
                    onchange="readURL(this, '#ogImagePreview')">
                    @error('og_image')
    <span class="text-danger">{{ $message }}</span>
@enderror
            </div>
        </div>
        {{-- author --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Author
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="author" placeholder="" name="author"
                        value="{{ old('author') }}">
                    <label for="">author</label>
                    @error('author')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
            </div>
        </div>
        {{-- tages --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Tages
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="tags" placeholder="Hindi Title"
                        name="tags" value="{{ old('tags') }}">
                    <label for="">tages</label>
                    @error('tags')
    <span class="text-danger">{{ $message }}</span>
@enderror
                </div>
            </div>
        </div>
        {{-- og url --}}
        <div class="row mb-3">
            <div class="col-sm-12 col-lg-3 col-md-12">
                Og Url
            </div>
            <div class="col">
                <div class="form-label-group">
                    <input type="text" class="form-control" id="og_url" placeholder="Og URL" name="og_url"
                        value="{{ old('og_url') }}">
                    <label for="">Url</label>
                    @error('og_url')
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
                .create(document.querySelector('#form_firstname'))
        });
    </script>

    @endsection
    
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
