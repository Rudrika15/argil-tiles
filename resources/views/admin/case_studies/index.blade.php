@extends('admin.layouts.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap4.min.css">

@section('pageTitle', 'case-study')

@section('content')

    <div class="main-content">
        <div class="float-left">
            <h2>Case Study</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success bi bi-arrow-right" href="{{ route('admin.case_studies.create') }}"> Add New Case Study</a>
        </div>
        <br><br><br>
        <div class="table table-content" style="overflow-x: scroll">
            <table class="table table-bordered table-hover" id="dataTable" style="width: 100%; border:2px solid whitesmoke">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Title</th>
                        <th scope="col">Industry</th>
                        {{-- <th scope="col">Description</th> --}}
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
                     @foreach ($caseStudies  as $caseStudy)
                    <tr>
                        <td>{{ $caseStudy->updated_at->format('d-m-Y')  }}</td>
                        <td>{{ $caseStudy->title }}</td>
                        <td>{{ $caseStudy->slug }}</td>
                        {{-- <td>{{ Str::limit($data->description, 500, '...') }}</td> --}}
                        {{-- <td><img src="{{ 'blogimage/'.$data->image }}" style="height:200px" class="img-thumbnail"></td> --}}
                        <td>
                            @if($caseStudy->status == 'published')
                                <span class="">Published</span>
                            @else
                                <span class="">Draft</span>
                            @endif
                        </td>
                        <td>
                            <span class="d-flex" style="gap: 8px">
                            <a href = "{{ route('admin.case_studies.edit', $caseStudy->slug) }}" class="btn btn-primary"> Edit </a>
                            <a href="javascript:void(0)" class="btn btn-warning"
                            onclick="openDeleteModal('{{ Route('admin.case_studies.delete', $caseStudy->slug) }}')">
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
