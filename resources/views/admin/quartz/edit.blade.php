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
				<h2>Quartz Product Edit</h2>
			</div>
			<div class="float-right">
				<a href="{{route('quartzshow')}}" class="btn btn-success">Back</a>
			</div>
		</div>
	</div>



	<form class="form-group" enctype="multipart/form-data" action="{{route('quartz.editcode')}}" method="post">
		@csrf

		<input type="hidden" name="id" value="{{$data->id}}">
		<div class="row">
			<div class="col-md-6">

				<div class="form-label-group">
					<input id="form_firstname" type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Name" required>
					<label for="form_firstname">Name</label>
				</div>

                <div class="form-label-group">
                    <select name="sizes" id="sizes" class="form-control" required>
                        <option value="" disabled selected>sizes</option>
                        @foreach($data1 as $item1)
						<option value="{{$item1->size}}" {{ $item1->size == $data->sizes ? 'selected':'' }}>{{$item1->size}}</option>
						@endforeach
                    </select>
                </div>

                <div class="form-label-group">
                    <select name="thicknesses" id="thicknesses" class="form-control" required>
                        <option value="" disabled selected>Thicknesses</option>
                        <option value="20 X 30 MM"{{ $data->thicknesses == '20 X 30 MM'?'selected':'' }}>20 X 30 MM</option>
                        <option value="30 X 40 MM"{{ $data->thicknesses == '30 X 40 MM'?'selected':'' }}>30 X 40 MM</option>

                    </select>
                </div>

                <div class="form-label-group">
                    <select name="finishType" id="finishType" class="form-control" required>
                        <option value="" disabled selected>finishType</option>
                        @foreach($data2 as $data2)
						<option value="{{$data2->type}}"{{ $data2->type ==$data->finishType?'selected':'' }}>{{$data2->type}}</option>
						@endforeach
                    </select>
                </div>

                <div class="form-label-group">
                    <select name="stock" id="stock" class="form-control" required>
                        <option value="" disabled selected>stock</option>
                        @foreach($data3 as $data3)
						<option value="{{$data3->stock}}"{{ $data3->stock ==$data->stock?'selected':'' }}>{{$data3->stock}}</option>
						@endforeach
                    </select>
                </div>



				<div class="form-label-group">
					<input id="form_firstname" type="text" name="primarycolors" value="{{$data->primarycolors}}" class="form-control" placeholder="Primarycolors" required>
					<label for="form_firstname">Primary Colors</label>
				</div>


				<div class="form-label-group">
					<input id="form_firstname" type="text" name="bookmatch" value="{{$data->bookmatch}}" class="form-control" placeholder="Book Match" required>
					<label for="form_firstname">Book Match</label>
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




				<img src="{{url('quartz')}}/{{$data -> mainImg}}" alt="Main Image" id="img1" style='height:150px;width:100px' class="mt-2">
				<img src="{{url('quartz')}}/{{$data -> subImg1}}" alt="Sub-Img1" id="img2" style='height:150px;width:100px' class="mt-2">
				<img src="{{url('quartz')}}/{{$data -> subImg2}}" alt="Sub-Img2" id="img3" style='height:150px;width:100px' class="mt-2">
				<img src="{{url('quartz')}}/{{$data -> subImg3}}" alt="Sub-Img3" id="img4" style='height:150px;width:100px' class="mt-2">
				<img src="{{url('quartz')}}/{{$data -> subImg4}}" alt="Sub-Img4" id="img5" style='height:150px;width:100px'  class="mt-2">
				<img src="{{url('quartz')}}/{{$data -> subImg5}}" alt="Sub-Img5" id="img6" style='height:150px;width:100px'  class="mt-2">

			</div>

		</div>
         {{-- add meta propertys --}}
         <hr class="sidebar-divider my-4">

         <div class="row mb-4">
             <h4 class="m-3">Edit Meta Propertys for Quartz Product</h4>
         </div>

         {{-- og titles --}}
         <div class="row mb-3">
             <div class="col-sm-12 col-lg-3 col-md-12">
                 Og Title
             </div>
             <div class="col">
                 <div class="form-label-group">
                     <input type="text" class="form-control" id="ogTitleEng" placeholder="English Title"
                         name="ogTitleEng" value="{{ $data4->ogTitleEng ?? '' }}">
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
                         name="ogDescriptionEng" value="{{ $data4->ogDescriptionEng ?? '' }}">
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
                <img id="ogImagePreview" src="{{ !empty($metablogs) && !empty($metablogs->ogImage) ? asset('ogimage/'.$data4->ogImage) : asset('slider/image_default.png') }}" alt="Og Image" height="100px"
                    width="150px">
            </div>
            <div class="col-md-7">
                <div class="form">
                    <label>Upload Image</label>
                    <input type="file" class="form-control" id="ogImage" placeholder="" name="ogImage"  accept='image/*' onchange="readURL(this,'#ogImagePreview')">
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
                         value="{{ $data4->ogUrl ?? '' }}">
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
                     <input type="text" class="form-control" id="metadescription" placeholder="" name="metadescription"
                         value="{{ $data4->description ?? '' }}">
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
                         value="{{ $data4->keywords ?? '' }}">
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
                         value="{{ $data4->author ?? '' }}">
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
                         name="tages" value="{{ $data4->tages ?? '' }}">
                     <label for="">tages</label>
                 </div>
             </div>
         </div>
         <div class="text-center form-action">
             <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
         </div>
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
