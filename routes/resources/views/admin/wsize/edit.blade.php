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
        <h2>W Size Edit</h2>
      </div>
      <div class="float-right">
        <a href="{{route('wsizeshow')}}" class="btn btn-success">Back</a>
      </div>
    </div>
  </div>

  <form class="form-group" method="post" action="{{route('wsize.editcode')}}">
    @csrf
    <div class="form-label-group">
      <input type="hidden" name="id" value="{{$data->id}}">
      <input id="size" name="size" type="text" value="{{$data->size}}" class="form-control" placeholder="Enter w size" required>
      <label for="size">size</label>
    </div>

    <div class="text-center form-action">
      <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
    </div>
  </form>


</div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
