@extends('admin.layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

@section('pageTitle', 'cms')

@section('content')

    <div class="main-content">
        <div class="float-left">
            <h2>CMS</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('admin.cms.create') }}"> Add New CMS</a>
        </div>
        <br><br><br>
        <div class="table table-content" style="overflow-x: scroll">
            <table class="table table-bordered table-hover" id="dataTable" style="width: 100%; border:2px solid whitesmoke">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                {{-- @if (count($data) == 0)
                <tr>
                    <td colspan="12" class="text-center text-danger">No Record Found</td>
                </tr>

            @endif --}}
                <tbody>
                     @foreach ($cms as $data)
                    <tr>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ Str::limit($data->description, 500, '...') }}</td>
                        {{-- <td><img src="{{ 'blogimage/'.$data->image }}" style="height:200px" class="img-thumbnail"></td> --}}
                        <td>{{ $data->status }}</td>
                        <td>
                            <span class="d-flex" style="gap: 8px">
                            <a href = "{{ route('admin.cms.edit', $data->id) }}" class="btn btn-primary"> Edit </a>
                            <a href="javascript:void(0)" class="btn btn-warning"
                            onclick="openDeleteModal('{{ Route('admin.cms.delete', $data->id) }}')">
                            Delete
                        </a>
                            </span>
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
