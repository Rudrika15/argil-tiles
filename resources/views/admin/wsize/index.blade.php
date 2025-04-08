@extends('admin.layouts.app')

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
            <h2>W Size View</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('wsizecreate') }}">Add New Record</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Size</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->size }}</td>
                        <td style="padding:9px">
                            <a href = "{{ route('wsize.edit', $data->id) }}" class="btn btn-primary">Edit</a>
                            <a href="javascript:void(0)" class="btn btn-warning"
                            onclick="openDeleteModal('{{Route('wsize.delete',$data->id)}}')">
                            Delete
                        </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
