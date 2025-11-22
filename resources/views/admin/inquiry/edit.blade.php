@extends('admin.layouts.app')

@section('pageTitle','Dashboard')

@section('content')

  <div class="main-content">
  <div class="row">
    <div class="col-md-12">
    <div class="float-left">
        <h2>Inquiry Edit</h2>
    </div>
    <div class="float-right">
        <a href="{{route('inquiryshow')}}" class="btn btn-success">Back</a>
    </div>
</div>
</div>

    <form class="form-group" method="post" action="{{route('inquiry.editcode')}}">
    @csrf>
      <div class="form-label-group">
      <input type="hidden" name="id" value="{{$data->id}}">
        <input id="form_firstname" type="text" name="subject" value="{{$data->subject}}" class="form-control" placeholder="Subject" required>
				<label for="form_firstname">Subject</label>
  		</div>

		<div class="form-label-group">
        <input id="form_firstname" type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Name" required>
				<label for="form_firstname">Name</label>
  		</div>

				<div class="form-label-group">
        <input id="form_firstname" type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Email" required>
				<label for="form_firstname">Email</label>
  		</div>

		<div class="form-label-group">
        <input id="form_firstname" type="text" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone" required>
				<label for="form_firstname">Phone</label>
  		</div>


		<div class="form-label-group">
        <textarea id="form_firstname" name="message" class="form-control" required>{{$data->message}}</textarea>
				<label for="form_firstname">Message</label>
  		</div>


		<div class="form-label-group">
        <textarea id="form_firstname" name="details" class="form-control" required>{{$data->details}}</textarea>
				<label for="form_firstname">Details</label>
  		</div>


      <div class="text-center form-action">
        <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
      </div>
		</form>


</div>


@endsection


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

