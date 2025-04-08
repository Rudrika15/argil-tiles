@extends('admin.layouts.app')

@section('pageTitle','Dashboard')

@section('content')

  <div class="main-content">
  <div class="row">
    <div class="col-md-12">
    <div class="float-left">
        <h2>Inquiry Create</h2>
    </div>
    <div class="float-right">
        <a href="{{route('inquiryshow')}}" class="btn btn-success">Back</a>
    </div>
</div>
</div>

    <form class="form-group"  action="{{route('inquirystore')}}"  method="post" >
			@csrf
		<div class="form-label-group">
        <input id="form_firstname" type="text" name="subject" class="form-control" placeholder="Subject" required>
				<label for="form_firstname">Subject</label>
  		</div>

		<div class="form-label-group">
        <input id="form_firstname" type="text" name="name" class="form-control" placeholder="Name" required>
				<label for="form_firstname">Name</label>
  		</div>

				<div class="form-label-group">
        <input id="form_firstname" type="text" name="email" class="form-control" placeholder="Email" required>
				<label for="form_firstname">Email</label>
  		</div>

		<div class="form-label-group">
        <input id="form_firstname" type="text" name="phone" class="form-control" placeholder="Phone" required>
				<label for="form_firstname">Phone</label>
  		</div>


		<div class="form-label-group">
        <textarea id="form_firstname" name="message" class="form-control"  required></textarea>
				<label for="form_firstname">Message</label>
  		</div>


		<div class="form-label-group">
        <textarea id="form_firstname" name="details" class="form-control" required></textarea>
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

