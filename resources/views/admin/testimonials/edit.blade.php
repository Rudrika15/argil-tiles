@extends('admin.layouts.app')

@section('pageTitle','Edit Testimonial')
<style>
.ck-editor__editable {
    min-height: 250px;
}
</style>

@section('content')


<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="float-left">
                <h2>Edit Testimonial</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success mb-2">
                    Back
                </a>
            </div>
        </div>
    </div>

    <form class="form-group"
        enctype="multipart/form-data"
        action="{{ route('admin.testimonials.update', $testimonial->id) }}"
        method="POST">

        @csrf


        <div class="row">
            <div class="col-md-12">

                <div class="form-label-group">
                    <input type="text" name="client_name" class="form-control"
                        placeholder="Client Name"
                        value="{{ $testimonial->client_name }}">
                    <label>Client Name</label>
                    @error('client_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                
                </div>

                <div class="form-label-group">
                    <input type="text" name="company_name" class="form-control"
                        placeholder="Company Name"
                        value="{{ $testimonial->company_name }}">
                    <label>Company Name</label>
                </div>

                <div class="form-label-group">
                    <input type="text" name="designation" class="form-control"
                        placeholder="Designation"
                        value="{{ $testimonial->designation }}">
                    <label>Designation</label>
                </div>

                <div class="form-label-group">
                    <input type="text" name="location" class="form-control"
                        placeholder="Location"
                        value="{{ $testimonial->location }}">
                    <label>Location</label>
                </div>

                <div class="form-label-group">
                    <input type="text" name="project_name" class="form-control"
                        placeholder="Project Name"
                        value="{{ $testimonial->project_name }}">
                    <label>Project Name</label>
                </div>

                <div class="form-label-group">
                    <input type="text" name="product_type" class="form-control"
                        placeholder="Product Type"
                        value="{{ $testimonial->product_type }}">
                    <label>Product Type</label>
                </div>

                <div class="form-label-group">
                    <select name="rating" class="form-control" >
                        <option value="">Select Rating</option>
                        @for($i = 1; $i <= 5; $i++)
                            <option value="{{ $i }}"
                                {{ $testimonial->rating == $i ? 'selected' : '' }}>
                                {{ $i }} Star
                            </option>
                        @endfor
                    </select>
                    @error('rating')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
        
            </div>

            <div class="row">
    <div class="col-md-9">
        <div class="form-label-group">
            <input accept="image/*"
                onchange="readURL(this,'#image')"
                id="form_firstname"
                type="file"
                name="client_image"
                class="form-control"
                placeholder="Client Image">

            <label for="form_firstname">Client Image</label>
            @error('client_image')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        
        </div>
    </div>

    <div class="col-md-3">
        <img src="{{ asset('testimonialimage/' . $testimonial->image) }}"
            alt="image"
            id="image"
            style="height:150px;width:100px">
    </div>
</div>

            <div class="form-label-group">
                <textarea name="testimonial"
                    class="form-control"
                    rows="5"
                    id="testimonial"
                    placeholder="Testimonial">{{ $testimonial->testimonial }}</textarea>
                     @error('testimonial')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-label-group">
                <select name="status" class="form-control" >
                    <option value="1" {{ $testimonial->status == 1 ? 'selected' : '' }}>
                        Active
                    </option>
                    <option value="0" {{ $testimonial->status == 0 ? 'selected' : '' }}>
                        Inactive
                    </option>
                </select>
                  @error('status')
    <span class="text-danger">{{ $message }}</span>
@enderror
        
            </div>

            <div class="form-group">
                <input type="number"
                    name="display_order"
                    class="form-control"
                    placeholder="Display Order"
                    value="{{ $testimonial->display_order }}">
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>

        </div>
    </div>

</form>

</div>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

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
document.addEventListener('DOMContentLoaded', function () {

    console.log('Page Loaded');

    const testimonial = document.querySelector('#testimonial');

    if (testimonial) {
        ClassicEditor
            .create(testimonial)
            .then(editor => {
                console.log('CKEditor Loaded');
            })
            .catch(error => {
                console.error(error);
            });
    }

});
</script>
@endsection
