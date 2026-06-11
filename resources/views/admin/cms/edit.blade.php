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
				<h2>CMS Edit</h2>
			</div>
			<div class="float-right">
				<a href="{{route('admin.cms.index')}}" class="btn btn-success mb-2">Back</a>
			</div>
		</div>
	</div>

	<form class="form-group" enctype="multipart/form-data" action="{{route('admin.cms.update',$cms->id)}}" method="post">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="form-label-group">
					<input id="name" type="text" name="title" value="{{$cms->title}}" class="form-control" placeholder="title" required>
					<label for="form_firstname">title</label>
				</div>
<div class="form-label-group">
                <input type="text" name="slug" id="slug" value="{{$cms->slug}}" class="form-control">
</div>

				
                    <div class="form-label-group">
                         <textarea id="form_firstname"
          name="description"
          class="form-control"
          placeholder="Description">{{ old('description', $cms->description) }}</textarea>
                    </div> 

                 <div class="form-label-group">
    <select name="status" id="status" class="form-control" required >
        <option value="" disabled>Status</option>
        <option value="1" {{ old('status', $cms->status) == 1 ? 'selected' : '' }}>
            Active
        </option>
        <option value="0" {{ old('status', $cms->status) == 0 ? 'selected' : '' }}>
            Inactive
        </option>
    </select>
</div>
			</div>
		</div>

		<h4 class="mb-4">Edit Meta Properties for CMS</h4>

   {{-- Meta title --}}
    <div class="row mb-3">
        <div class="col-sm-12 col-lg-3 col-md-12">
            meta title
        </div>
        <div class="col">
            <div class="form-label-group">
                <input type="text" class="form-control" value="{{$cms->meta_title}}" id="meta_title" placeholder="" name="meta_title"
                    value="{{ old('meta_title') }}">
                <label for="">title</label>
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
                <input type="text" class="form-control" value="{{$cms->meta_keyword}}" id="meta_keyword" placeholder="Meta Keyword" name="meta_keyword"
                    value="{{ old('meta_keyword') }}">
                <label for="">keywords</label>
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
                <input type="text" class="form-control" value="{{$cms->meta_description}}" id="meta_description" placeholder="Meta Description"
                    name="meta_description" value="{{ old('meta_description') }}">
                <label for="">description</label>
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
                id="og+image"
                value="{{$cms->og_image}}"
                class="form-control"
                accept="image/*"
                onchange="readURL(this, '#ogImagePreview')">
        </div>
    </div>
    {{-- author --}}
    <div class="row mb-3">
        <div class="col-sm-12 col-lg-3 col-md-12">
            Author
        </div>
        <div class="col">
            <div class="form-label-group">
                <input type="text" class="form-control" value="{{$cms->author}}" id="author" placeholder="" name="author"
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
                <input type="text" class="form-control" value="{{$cms->tags}}" id="tags" placeholder="Hindi Title"
                    name="tags" value="{{ old('tags') }}">
                <label for="">tages</label>
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
                <input type="text" class="form-control" value="{{$cms->og_url}}" id="og_url" placeholder="Og URL" name="og_url"
                    value="{{ old('og_url') }}">
                <label for="">Url</label>
            </div>
        </div>
    </div>
    <div class="text-center form-action">
                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
            </div>

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

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
