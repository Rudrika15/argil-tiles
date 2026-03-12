@extends('admin.layouts.app')

@section('pageTitle', 'Export Edit')

<style>
.ck-editor__editable_inline{
    min-height:200px;
}
</style>

@section('content')

<div class="main-content">

<div class="row">
<div class="col-md-12">

<div class="float-left">
<h2>Edit Export</h2>
</div>

<div class="float-right">
<a href="{{ route('export') }}" class="btn btn-success">Back</a>
</div>

</div>
</div>


<form enctype="multipart/form-data"
action="{{ route('export.update',$export->id) }}"
method="post">

@csrf


{{-- Title --}}
<div class="form-label-group">
<input type="text"
name="title"
value="{{ $export->title }}"
class="form-control"
required>

<label>Title</label>
</div>


<input type="hidden" name="slug" value="{{ $export->slug }}">


{{-- Details --}}
<div class="form-label-group mt-3">

<textarea id="details"
name="details"
class="form-control">{{ $export->details }}</textarea>

</div>


<hr class="sidebar-divider my-4">

<h4 class="mb-3">SEO Settings</h4>


{{-- Meta Title --}}
<div class="form-label-group mb-3">

<input type="text"
name="metaTitle"
class="form-control"
value="{{ $export->metaTitle }}">

<label>Meta Title</label>

</div>


{{-- Meta Description --}}
<div class="form-label-group mb-3">

<textarea name="metaDescription"
class="form-control">{{ $export->metaDescription }}</textarea>

</div>


{{-- Meta Keywords --}}
<div class="form-label-group mb-3">

<input type="text"
name="metaKeywords"
class="form-control"
value="{{ $export->metaKeywords }}">

<label>Meta Keywords</label>

</div>


{{-- OG Title --}}
<div class="form-label-group mb-3">

<input type="text"
name="ogTitle"
class="form-control"
value="{{ $export->ogTitle }}">

<label>OG Title</label>

</div>


{{-- OG Description --}}
<div class="form-label-group mb-3">

<textarea name="ogDescription"
class="form-control">{{ $export->ogDescription }}</textarea>

</div>


{{-- OG Image --}}
<div class="row mb-3">

<div class="col-md-3">

<img id="ogImagePreview"
src="{{ $export->ogImage ? asset('exportimage/'.$export->ogImage) : asset('slider/image_default.png') }}"
height="120">

</div>

<div class="col-md-9">

<input type="file"
class="form-control"
name="ogImage"
accept="image/*"
onchange="readURL(this,'#ogImagePreview')">

</div>

</div>


{{-- Status --}}
<div class="form-group mb-3">

<select name="status" class="form-control">

<option value="Y" {{ $export->status=='Y'?'selected':'' }}>Active</option>
<option value="N" {{ $export->status=='N'?'selected':'' }}>Inactive</option>

</select>

</div>


<div class="text-center form-action">
<button type="submit" class="btn btn-primary">Update</button>
</div>


</form>

</div>



<script>

function readURL(input,tgt){

if(input.files && input.files[0]){

var reader = new FileReader();

reader.onload=function(e){

document.querySelector(tgt).setAttribute("src",e.target.result);

};

reader.readAsDataURL(input.files[0]);

}

}

</script>



<script>

document.addEventListener("DOMContentLoaded",function(){

ClassicEditor
.create(document.querySelector('#details'))

});

</script>


@endsection


<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>