@extends('admin.layouts.app')

@section('pageTitle', 'Dashboard')

@section('content')

    {{-- <div class="row">
        <div class="col-md-12">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
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
                    <h2>Blog Create</h2>
                </div>
                <div class="float-right">
                    <a href="{{ route('blog') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>

        <form class="form-group" enctype="multipart/form-data" action="{{ route('blog.store') }}" method="post">
            @csrf
            <div class="form-label-group">
                <input id="title" type="text" name="title" class="form-control" placeholder="Title" required>
                <label for="form_firstname">Title</label>
            </div>

            <input type="hidden" name="slug" id="slug">


            <div class="form-label-group">
                <textarea id="form_firstname" name="description" class="form-control" placeholder="Description"></textarea>
            </div>
            {{-- <div id="toolbar" class="mb-3 d-flex flex-wrap align-items-center gap-2"></div>

            <!-- Editor -->
            <div id="editor" contenteditable="true" class="bg-white"></div>

            <!-- Source View -->
            <textarea id="source" name="description" class="form-control mt-2" placeholder="HTML Source Code"></textarea>
            <br /> --}}

            <div class="row">
                <div class="col-md-6">
                    <div class="form-label-group">
                        <input accept='image/*' onchange="readURL(this,'#image')" id="form_firstname" type="file"
                            name="image" class="form-control" placeholder="image" required>

                        <label for="form_firstname">Blog Image</label>
                    </div>
                </div>
                <div class="col-md-6"> <img src="{{ url('slider/image_default.png') }}" alt="image" id="image"
                        style='height:150px;width:100px'>
                </div>
            </div>
            {{-- add meta propertys --}}
            <hr class="sidebar-divider my-4">

            <div class="row mb-4">
                <h4 class="m-3">Add Meta Propertys for Blog</h4>
            </div>

            {{-- og titles --}}
            <div class="row mb-3">
                <div class="col-sm-12 col-lg-3 col-md-12">
                    Og Title
                </div>
                <div class="col">
                    <div class="form-label-group">
                        <input type="text" class="form-control" id="ogTitleEng" placeholder="English Title"
                            name="ogTitleEng" value="{{ old('ogTitleEng') }}">
                        <label for="">og title</label>
                    </div>
                </div>

            </div>

            {{-- og Description --}}
            <div class="row mb-3">
                <div class="col-sm-12 col-lg-3 col-md-12">
                    Og Description
                </div>
                <div class="col">
                    <div class="form-label-group">
                        <input type="text" class="form-control" id="ogDescriptionEng" placeholder="English Description"
                            name="ogDescriptionEng" value="{{ old('ogDescriptionEng') }}">
                        <label for="">og description</label>
                    </div>
                </div>

            </div>

            {{-- og image --}}
            <div class="row mb-3">
                <div class="col-sm-12 col-lg-3 col-md-12">
                    Og Image
                </div>
                <div class="col-md-2" id="imagepreview">
                    <img id="ogImagePreview" src="{{ asset('slider/image_default.png') }}" alt="Og Image" height="100px"
                        width="150px">
                </div>
                <div class="col-md-7">
                    <div class="form">
                        <label>Upload Image</label>
                        <input type="file" class="form-control" id="ogImage" placeholder="" accept='image/*'
                            onchange="readURL(this,'#ogImagePreview')" name="ogImage">
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
                        <input type="text" class="form-control" id="ogUrl" placeholder="" name="ogUrl"
                            value="{{ old('ogUrl') }}">
                        <label for="">Url</label>
                    </div>
                </div>
            </div>

            {{-- description --}}
            <div class="row mb-3">
                <div class="col-sm-12 col-lg-3 col-md-12">
                    Description
                </div>
                <div class="col">
                    <div class="form-label-group">
                        <input type="text" class="form-control" id="metadescription" placeholder=""
                            name="metadescription" value="{{ old('metadescription') }}">
                        <label for="">description</label>
                    </div>
                </div>
            </div>

            {{-- keyword --}}
            <div class="row mb-3">
                <div class="col-sm-12 col-lg-3 col-md-12">
                    Keyword
                </div>
                <div class="col">
                    <div class="form-label-group">
                        <input type="text" class="form-control" id="keywords" placeholder="" name="keywords"
                            value="{{ old('keywords') }}">
                        <label for="">keywords</label>
                    </div>
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
                        <input type="text" class="form-control" id="tages" placeholder="Hindi Title"
                            name="tages" value="{{ old('tages') }}">
                        <label for="">tages</label>
                    </div>
                </div>
            </div>
            <div class="text-center form-action">
                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
            </div>
        </form>


    </div>
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
        document.addEventListener("DOMContentLoaded", function() {
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');

            titleInput.addEventListener('input', function() {
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
