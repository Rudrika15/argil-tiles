@extends('admin.layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

@section('pageTitle', 'Dashboard')
@section('content')

    {{-- <div class="row">
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
    </div> --}}

    <div class="main-content">
        <div class="float-left">
            <h2>Catelogue View</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('cateloguecreate') }}">Add New Record</a>
        </div>
        <br><br><br>
        <div class="table table-content" style="overflow-x: scroll">
            <table id="dataTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Pdf</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->pdfFile }}</td>
                            <td class="d-flex" style="gap: 8px">
                                <a href = "{{ route('catelogue.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                                <a href="javascript:void(0)" class="btn btn-warning"
                                onclick="openDeleteModal('{{Route('catelogue.delete',$data->id)}}')">
                                Delete
                            </a>
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
