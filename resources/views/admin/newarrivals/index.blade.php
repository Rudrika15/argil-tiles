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
            <h2>New Arrivals</h2>
        </div>
        {{-- <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="">Add New Record</a>
        </div> --}}

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">NavigateUrl</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newarrivals as $data)
                    <tr>

                        <td><img src="{{ asset('newarieles/'.$data->image) }}" style="height:200px" class="img-thumbnail"></td>
                        <td>{{ $data->navigate_url }}</td>
                        <td class="d-flex" style="gap: 8px" >
                            <a href = "{{ Route('newarrivals.edit',$data->id) }}" class="btn btn-primary"> Edit </a>
                            {{-- <a href="javascript:void(0)" class="btn btn-warning"
                            onclick="openDeleteModal('{{Route('slider.delete',$data->id)}}')">
                            Delete
                        </a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
