@extends('admin.layouts.app')

@section('pageTitle', 'Create Testimonial')

@section('content')

<div class="main-content">

    <div class="row mb-3">
        <div class="col-md-12">
            <div class="float-left">
                <h2>Create Testimonial</h2>
            </div>
            <div class="float-right">
                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success">
                    Back
                </a>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">

           <div class="col-md-12 mb-3">
    <input type="text" name="client_name" class="form-control"
        placeholder="Client Name *"
        value="{{ old('client_name') }}" required>
</div>

<div class="col-md-12 mb-3">
    <input type="text" name="company_name" class="form-control"
        placeholder="Company Name"
        value="{{ old('company_name') }}">
</div>

<div class="col-md-12 mb-3">
    <input type="text" name="designation" class="form-control"
        placeholder="Designation"
        value="{{ old('designation') }}">
</div>

<div class="col-md-12 mb-3">
    <input type="text" name="location" class="form-control"
        placeholder="Location"
        value="{{ old('location') }}">
</div>

<div class="col-md-12 mb-3">
    <input type="text" name="project_name" class="form-control"
        placeholder="Project Name"
        value="{{ old('project_name') }}">
</div>

<div class="col-md-12 mb-3">
    <input type="text" name="product_type" class="form-control"
        placeholder="Product Type"
        value="{{ old('product_type') }}">
</div>

<div class="col-md-12 mb-3">
    <select name="rating" class="form-control" required>
        <option value="">Select Rating *</option>
        <option value="1">1 Star</option>
        <option value="2">2 Stars</option>
        <option value="3">3 Stars</option>
        <option value="4">4 Stars</option>
        <option value="5">5 Stars</option>
    </select>
</div>

<div class="col-md-12 mb-3">
    <input type="number" name="display_order" class="form-control"
        placeholder="Display Order"
        value="{{ old('display_order', 0) }}">
</div>

<div class="col-md-12 mb-3">
    <input type="file" name="client_image" class="form-control"
        accept="image/*"
        onchange="readURL(this,'#previewImage')">

    <div class="mt-2">
        <img id="previewImage"
            src="https://via.placeholder.com/120x120?text=Preview"
            width="120"
            class="img-thumbnail">
    </div>
</div>

<div class="col-md-12 mb-3">
    <select name="status" class="form-control" required>
        <option value="">Select Status *</option>
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
</div>

<div class="col-md-12 mb-3">
    <textarea name="testimonial"
        rows="5"
        class="form-control"
        placeholder="Enter Testimonial *"
        required>{{ old('testimonial') }}</textarea>
</div>

<div class="text-center form-action">
                <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
            </div>
        </div>

    </form>

</div>

<script>
    function readURL(input, target) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                document.querySelector(target).src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection