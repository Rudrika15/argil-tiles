@extends('admin.layouts.app')

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
            <h2>Blog View</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ Route('blog.create') }}">Add New Record</a>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $data)
                    <tr>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->slug }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img src="{{ 'blogimage/'.$data->image }}" style="height:200px" class="img-thumbnail"></td>
                        <td>{{ $data->status }}</td>
                        <td style="gap: 8px">
                            <a href = "{{ route('blog.edit', $data->id) }}" class="btn btn-primary"> Edit </a>
                            <a href="{{ route('slider.delete', $data->id) }}" class="btn btn-warning"> Delete </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
