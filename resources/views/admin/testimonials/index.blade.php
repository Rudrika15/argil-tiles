@extends('admin.layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

@section('pageTitle', 'Testimonials')

@section('content')

<div class="main-content">
    <div class="float-left">
        <h2>Testimonials</h2>
    </div>
<div class="float-right">
    <a class="btn btn-success bi bi-arrow-right"
        href="{{ route('admin.testimonials.create') }}">
        Add New Testimonial
    </a>
</div>

<br><br><br>

<div class="table table-content" style="overflow-x: scroll">
    <table class="table table-bordered table-hover"
        id="dataTable"
        style="width:100%; border:2px solid whitesmoke">

        <thead>
            <tr>
                <th>Date</th>
                <th>Image</th>
                <th>Client Name</th>
                <th>Company</th>
                <th>Location</th>
                <th>Product Type</th>
                <th>Rating</th>
                <th>Display Order</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($testimonials as $data)
            <tr>
                <td>{{ $data->updated_at->format('d-m-Y') }}</td>

                <td>
    @if($data->client_image)
        <img src="{{ asset('testimonial-image/'.$data->client_image) }}"
             width="60"
             height="60"
             class="img-thumbnail">
    @else
        N/A
    @endif
</td>

                <td>{{ $data->client_name }}</td>
                <td>{{ $data->company_name }}</td>
                <td>{{ $data->location }}</td>
                <td>{{ $data->product_type }}</td>
                <td>{{ $data->rating }}/5</td>
                <td>{{ $data->display_order }}</td>

                <td>
                    {{ $data->status ? 'Active' : 'Inactive' }}
                </td>

                <td>
                    <span class="d-flex" style="gap:8px">

                        <a href="{{ route('admin.testimonials.edit', $data->id) }}"
                            class="btn btn-primary">
                            Edit
                        </a>

                        <a href="javascript:void(0)"
                            class="btn btn-warning"
                            onclick="openDeleteModal('{{ route('admin.testimonials.delete', $data->id) }}')">
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
