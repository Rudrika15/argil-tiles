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
            <h2>SPC Product View</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('lvtcreate') }}"> Add New Record</a>
        </div>
        <br><br><br>
        <div class="table table-content" style="overflow-x: scroll">
            <table class="table table-bordered table-hover" id="dataTable" style="width: 100%; border:2px solid whitesmoke">
                <thead>
                    <tr>
                        <th scope="col">Names</th>
                        <th scope="col">Thicknesses</th>
                        <th scope="col">Primary Colors</th>
                        <th scope="col">Edges</th>
                        <th scope="col">Click Type</th>
                        <th scope="colx">Shade Validation</th>
                        <th scope="col">Backing Type</th>
                        <th scope="col">Style</th>
                        <th scope="col">Wear Layer</th>
                        <th scope="col">Size</th>
                        <th scope="col">Main Images</th>
                        <th scope="col">Status</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->names }}</td>
                            <td>{{ $data->thicknesses }}</td>
                            <td>{{ $data->primarycolors }}</td>
                            <td>{{ $data->edges }}</td>
                            <td>{{ $data->clicktype }}</td>
                            <td>{{ $data->shadeVariation }}</td>
                            <td>{{ $data->backingType }}</td>
                            <td>{{ $data->style }}</td>
                            <td>{{ $data->wearLayer }}</td>
                            <td>{{ $data->bookmatch }}</td>
                            <td><img src="spc/{{ $data->mainImg }}" style="height:200px" class="img-thumbnail"></td>
                            <td>{{ $data->status }}</td>
                            <td class="d-flex" style="gap: 8px">
                                <a href="{{ route('lvt.edit', $data->id) }}" class="btn btn-primary"> Edit</a>
                                <a href="{{ route('lvt.delete', $data->id) }}" class="btn btn-warning"> Delete </a>
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
