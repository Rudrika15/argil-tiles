@extends('admin.layouts.app')

@section('pageTitle', 'Inquiry')

@section('content')

    <div class="row">
        <div class="col-md-12">

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <p>{{ $message }}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>

    <div class="main-content">
        <div class="float-left">
            <h2>Inquiry View</h2>
        </div>
        <div class="table table-content" style="overflow-x: scroll">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Details</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->created_at }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->message }}</td>
                            <td>{{ $data->details }}</td>
                            <td>
                                <!-- <a href = "{{ route('inquiry.edit', $data->id) }}"> Edit </a>|| -->
                                <a href = "{{ route('inquiry.delete', $data->id) }}" class="btn btn-warning"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
