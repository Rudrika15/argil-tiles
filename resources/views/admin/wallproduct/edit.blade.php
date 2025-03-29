@extends('admin.layouts.app')

@section('pageTitle','Dashboard')

@section('content')


<div class="row">
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
</div>

<div class="main-content">
	<div class="row">
		<div class="col-md-12">
			<div class="float-left">
				<h2>Wall Product Edit</h2>
			</div>
			<div class="float-right">
				<a href="{{route('wallshow')}}" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>



	<form class="form-group" enctype="multipart/form-data" action="{{route('wall.editcode')}}" method="post">
		@csrf
		<input type="hidden" name="id" value="{{$data->id}}">

		<div class="row">
			<div class="col-md-6">

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Name" required>
					<label for="form_firstname">Name</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" list="sizes" type="text" name="size" value="{{$data->size}}" class="form-control" placeholder="Size" required>
					<datalist id="sizes">

						@foreach($data4 as $data4)
						<option value="{{$data4->size}}">{{$data4->size}}</option>
						@endforeach
					</datalist>

					<label for="form_firstname">Size</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" list="finishtypes" type="text" name="finishType" value="{{$data->finishType}}" class="form-control" placeholder="Finish Type" required>
					<datalist id="finishtypes">
						@foreach($data3 as $data3)
						<option value="{{$data3->type}}">{{$data3->type}}</option>
						@endforeach
					</datalist>

					<label for="form_firstname">Finish Type</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" list="stocks" name="stock" value="{{$data->stock}}" class="form-control" placeholder="Stock" required>
					<datalist id="stocks">
						@foreach($data2 as $data2)
						<option value="{{$data2->stock}}">{{$data2->stock}}</option>
						@endforeach
					</datalist>

					<label for="form_firstname">Stock</label>
				</div>

				<div class="form-label-group">
					<input id="form_firstname" type="text" list="designtypes" name="designType" value="{{$data->designType}}" class="form-control" placeholder="Design Type" required>
					<datalist id="designtypes">
						@foreach($data1 as $data1)
						<option value="{{$data1->type}}">{{$data1->type}}</option>
						@endforeach

					</datalist>

					<label for="form_firstname">Design Type</label>
				</div>
			</div>

			<div class="col-md-6">

				<div class="form-label-group">
					<input id="form_firstname" accept='image/*' onchange="readURL(this,'#img1')" type="file" name="mainImg" class="form-control" placeholder="Main Img">
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




				<img src="{{url('wall')}}/{{$data -> mainImg}}" alt="Main Image" id="img1" style='height:150px;width:100px'>
				<img src="{{url('wall')}}/{{$data -> subImg1}}" alt="Sub-Img1" id="img2" style='height:150px;width:100px'>
				<img src="{{url('wall')}}/{{$data -> subImg2}}" alt="Sub-Img2" id="img3" style='height:150px;width:100px'>
				<img src="{{url('wall')}}/{{$data -> subImg3}}" alt="Sub-Img3" id="img4" style='height:150px;width:100px'>
				<img src="{{url('wall')}}/{{$data -> subImg4}}" alt="Sub-Img4" id="img5" style='height:150px;width:100px'>
				<img src="{{url('wall')}}/{{$data -> subImg5}}" alt="Sub-Img5" id="img6" style='height:150px;width:100px'>

			</div>

		</div>
		<div class="text-center form-action float-right">
			<button type="submit" class="btn btn-primary text-uppercase">Submit</button>


	</form>
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


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
