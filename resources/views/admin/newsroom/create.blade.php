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
        <h2>News Room Create</h2>
      </div>
      <div class="float-right">
        <a href="{{route('newsroomshow')}}" class="btn btn-success">Back</a>
      </div>
    </div>
  </div>

  <form class="form-group" enctype="multipart/form-data" action="{{route('newsroomstore')}}" method="post">
    @csrf
    <div class="form-label-group">

      <input id="form_firstname" type="text" name="title" class="form-control" placeholder="Title" required>
      <label for="form_firstname">Title</label>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-label-group">
          <input accept='image/*' onchange="readURL(this,'#img')" id="form_firstname" type="file" name="img" class="form-control" placeholder="subImg4">
          <label for="form_firstname">Image</label>
        </div>

      </div>
      <div class="col-md-6">

        <img src="{{url('slider/image_default.png')}}" alt="Main Image" id="img" style='height:150px;width:100px'>
      </div>
    </div>


    <div class="form-label-group">
      <textarea id="form_firstname" name="details" class="form-control" required></textarea>
      <label for="form_firstname"></label>
    </div>


    <div class="text-center form-action">
      <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
    </div>
  </form>

</div>




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
