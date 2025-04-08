@extends('admin.layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">


@section('pageTitle', 'Dashboard')

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
            <h2>Wall Product View</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('wallcreate') }}"> Add New Record </a>
        </div>

        <br><br><br>
        <div class="table table-content" style="overflow-x: scroll">
            <table class="table table-bordered table-hover" id="dataTable" style="border: 2px solid whitesmoke">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Finish Type</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Design Type</th>
                        <th scope="col">Main Img</th>
                        <th scope="col">Status</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wdata as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->size }}</td>
                            <td>{{ $data->finishType }}</td>
                            <td>{{ $data->stock }}</td>
                            <td>{{ $data->designType }}</td>
                            <td><img src="wall/{{ $data->mainImg }}" style="height:200px" class="img-thumbnail"></td>
                            <td>{{ $data->status }}</td>
                            <td class="d-flex" style="gap:8px">
                                <a href="{{ route('wall.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('wall.delete', $data->id) }}" class="btn btn-warning">Delete</a>
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
