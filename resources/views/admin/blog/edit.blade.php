@extends('admin.layouts.app')

@section('pageTitle', 'Dashboard')

@section('content')

    <div class="row">
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
    </div>

    <div class="main-content">
        <div class="row">
            <div class="col-md-12">
                <div class="float-left">
                    <h2>Blog Edit</h2>
                </div>
                <div class="float-right">
                    <a href="{{ route('blog') }}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>

        <form class="form-group" enctype="multipart/form-data" action="{{ Route('blog.update',$blogs->id) }}" method="post">
            @csrf
            <div class="form-label-group">
                <input id="form_firstname" type="text" name="title" value="{{ $blogs->title }}" class="form-control" placeholder="Title" required>
                <label for="form_firstname">Title</label>
            </div>
            <div class="form-label-group">
                <input id="form_firstname" type="text" name="slug" value="{{ $blogs->slug }}" class="form-control" placeholder="Slug" required>
                <label for="form_firstname">Slug</label>
            </div>
            {{-- <div class="form-label-group">
                <textarea id="form_firstname" name="description" class="form-control" required>{{ $blogs->description }}</textarea>
                <label for="form_firstname">Description</label>
            </div> --}}
            <div class="form-label-group">
                <textarea id="form_firstname" name="description" class="form-control" placeholder="description" required>{{ $blogs->description }}</textarea>
            </div>
            <div class="row">
            <div class="col-md-6">
                    <div class="form-label-group">
                        <input accept='image/*' onchange="readURL(this,'#image')" id="form_firstname" type="file"
                            name="image" class="form-control" placeholder="image" required>

                        <label for="form_firstname">Blog Image</label>
                    </div>
                </div>
                <div class="col-md-6"> <img src="{{ asset('blogimage/'.$blogs->image) }}" alt="image" id="image"
                        style='height:150px;width:100px'>
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


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
