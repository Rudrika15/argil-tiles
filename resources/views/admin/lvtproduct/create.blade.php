@extends('admin.layouts.app')

@section('pageTitle','Dashboard')

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
				<h2>SPC Product Create</h2>
			</div>
			<div class="float-right">
				<a href="{{route('lvtshow')}}" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>

	<form class="form-group" enctype="multipart/form-data" action="{{route('lvtstore')}}" method="post">
		@csrf
		<div class="row">
			<div class="col-md-6">
				<div class="form-label-group">
					<input id="form_firstname" type="text" name="names" class="form-control" placeholder="Names" required>
					<label for="form_firstname">Names</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="thicknesses" class="form-control" placeholder="Thiknesses" required>
					<label for="form_firstname">Thiknesses</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="primarycolors" class="form-control" placeholder="Primarycolors" required>
					<label for="form_firstname">Primarycolors</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="edges" class="form-control" placeholder="Edges" required>
					<label for="form_firstname">Edges</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="clicktype" class="form-control" placeholder="Clicktype" required>
					<label for="form_firstname">Clicktype</label>
				</div>


				<div class="form-label-group">
					<input id="form_firstname" type="text" name="shadeVariation" class="form-control" placeholder="Shadevariation" required>
					<label for="form_firstname">Shadevariation</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="backingType" class="form-control" placeholder="backingtype" required>
					<label for="form_firstname">Backingtype</label>
				</div>


				<div class="form-label-group">
					<input id="form_firstname" type="text" name="style" class="form-control" placeholder="Style" required>
					<label for="form_firstname">Style</label>
				</div>


				<div class="form-label-group">
					<input id="form_firstname" type="text" name="wearLayer" class="form-control" placeholder="Wearlayer" required>
					<label for="form_firstname">Wearlayer</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" list="lvtsize" type="text" name="bookmatch" class="form-control" placeholder="Size" required>

					<datalist id="lvtsize">
						@foreach($lvtsize as $lvtsize)
						<option value="{{$lvtsize->size}}">{{$lvtsize->size}}</option>
						@endforeach
					</datalist>


					<label for="form_firstname">Size</label>
				</div>
			</div>

			<div class="col-md-6">
				<div class="form-label-group">
					<input id="form_firstname" accept='image/*' onchange="readURL(this,'#img1')" type="file" name="mainImg" class="form-control" placeholder="Main Img" required>


					<label for="form_firstname">Main Img</label>
				</div>


				<div class="form-label-group">
					<input id="form_firstname" type="file" name="subImg1" accept='image/*' onchange="readURL(this,'#img2')" class="form-control" placeholder="subImg1">


					<label for="form_firstname">SubImg1</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="file" name="subImg2" accept='image/*' onchange="readURL(this,'#img3')" class="form-control" placeholder="subImg2">
					<label for="form_firstname">SubImg2</label>
				</div>

				<div class="form-label-group">
					<input accept='image/*' onchange="readURL(this,'#img4')" id="form_firstname" type="file" name="subImg3" class="form-control" placeholder="subImg3">

					<label for="form_firstname">SubImg3</label>
				</div>

				<div class="form-label-group">
					<input accept='image/*' onchange="readURL(this,'#img5')" id="form_firstname" type="file" name="subImg4" class="form-control" placeholder="subImg4">
					<label for="form_firstname">SubImg4</label>
				</div>

				<div class="form-label-group">
					<input accept='image/*' onchange="readURL(this,'#img6')" id="form_firstname" type="file" name="subImg5" class="form-control" placeholder="subImg5">

					<label for="form_firstname">SubImg5</label>
				</div>
				<img src="{{url('slider/image_default.png')}}" alt="Main Image" id="img1" style='height:150px;width:100px'>
				<img src="{{url('slider/image_default.png')}}" alt="Sub-Img1" id="img2" style='height:150px;width:100px'>
				<img src="{{url('slider/image_default.png')}}" alt="Sub-Img2" id="img3" style='height:150px;width:100px'>
				<img src="{{url('slider/image_default.png')}}" alt="Sub-Img3" id="img4" style='height:150px;width:100px'>
				<img src="{{url('slider/image_default.png')}}" alt="Sub-Img4" id="img5" style='height:150px;width:100px'>
				<img src="{{url('slider/image_default.png')}}" alt="Sub-Img5" id="img6" style='height:150px;width:100px'>

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
