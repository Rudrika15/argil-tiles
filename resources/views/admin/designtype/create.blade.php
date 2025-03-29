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
        <h2>Designtype Create</h2>
      </div>
      <div class="float-right">
        <a href="{{route('designtypeshow')}}" class="btn btn-success">Back</a>
      </div>
    </div>
  </div>

  <form class="form-group" enctype="multipart/form-data" action="{{route('designtypestore')}}" method="post">
    @csrf
    <div class="form-label-group">
      <input id="type" type="text" name="type" class="form-control" placeholder="Type" required>
      <label for="type">Type</label>
    </div>

    <div class="text-center form-action">
      <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
    </div>
  </form>


</div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
