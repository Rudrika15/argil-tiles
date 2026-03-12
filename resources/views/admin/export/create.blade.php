@extends('admin.layouts.app')

@section('pageTitle', 'Export Create')

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
<h2>Export Create</h2>
</div>

<div class="float-right">
<a href="{{ route('export') }}" class="btn btn-success">Back</a>
</div>

</div>
</div>


<form enctype="multipart/form-data" action="{{ route('export.store') }}" method="post">
@csrf


{{-- Title --}}
<div class="form-label-group">
<input id="title" type="text" name="title" class="form-control" placeholder="Title" required>
<label>Title</label>
</div>


<input type="hidden" name="slug" id="slug">


{{-- Details --}}
<div class="form-label-group mt-3">
<textarea id="details" name="details" class="form-control" placeholder="Details"></textarea>
</div>


<hr class="sidebar-divider my-4">


<h4 class="mb-3">SEO Settings</h4>


{{-- Meta Title --}}
<div class="form-label-group mb-3">
<input type="text" class="form-control" name="metaTitle" placeholder="Meta Title">
<label>Meta Title</label>
</div>


{{-- Meta Description --}}
<div class="form-label-group mb-3">
<textarea class="form-control" name="metaDescription" placeholder="Meta Description"></textarea>
</div>


{{-- Meta Keywords --}}
<div class="form-label-group mb-3">
<input type="text" class="form-control" name="metaKeywords" placeholder="Meta Keywords">
<label>Meta Keywords</label>
</div>


{{-- OG Title --}}
<div class="form-label-group mb-3">
<input type="text" class="form-control" name="ogTitle" placeholder="OG Title">
<label>OG Title</label>
</div>


{{-- OG Description --}}
<div class="form-label-group mb-3">
<textarea class="form-control" name="ogDescription" placeholder="OG Description"></textarea>
</div>


{{-- OG Image --}}
<div class="row mb-3">

<div class="col-md-3">
<img id="ogImagePreview" src="{{ asset('slider/image_default.png') }}" height="120">
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
<div class="form-label-group mb-3">

<select name="status" class="form-control">

<option value="Y">Active</option>
<option value="N">Inactive</option>

</select>

</div>


<div class="text-center form-action">
<button type="submit" class="btn btn-primary">Submit</button>
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

const title=document.getElementById('title');
const slug=document.getElementById('slug');

title.addEventListener('input',function(){

let slugText=this.value
.toLowerCase()
.replace(/[^a-z0-9\s-]/g,'')
.replace(/\s+/g,'-');

slug.value=slugText;

});

});

</script>



<script>

document.addEventListener("DOMContentLoaded",function(){

ClassicEditor
.create(document.querySelector('#details'))

});

</script>

@endsection


<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>