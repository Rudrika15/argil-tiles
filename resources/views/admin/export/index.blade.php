@extends('admin.layouts.app')

@section('pageTitle', 'Export Dashboard')

@section('content')

<div class="main-content">

    <div class="float-left">
        <h2>Export View</h2>
    </div>

    <div class="float-right">
        <a class="btn btn-success bi bi-arrow-right mb-2" href="{{ route('export.create') }}">
            Add New Record
        </a>
    </div>

    <div class="table table-content" style="overflow-x:scroll">

        <table class="table table-bordered table-hover">

            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Details</th>
                    <th>OG Image</th>
                    <th>Status</th>
                    <th width="150">Option</th>
                </tr>
            </thead>

            @if($exports->count() == 0)
                <tr>
                    <td colspan="6" class="text-center text-danger">
                        No Record Found
                    </td>
                </tr>
            @endif

            <tbody>

                @foreach ($exports as $data)

                <tr>
                    <td>{{ $data->title }}</td>

                    <td>{{ $data->slug }}</td>

                    <td>
                        {{ Str::limit(strip_tags($data->details),150,'...') }}
                    </td>

                    <td>
                        @if($data->ogImage)
                        <img src="{{ asset('exportimage/'.$data->ogImage) }}"
                             style="height:120px"
                             class="img-thumbnail">
                        @else
                        No Image
                        @endif
                    </td>

                    <td>
                        {{ $data->status }}
                    </td>

                    <td>
                        <span class="d-flex" style="gap:8px">

                            <a href="{{ route('export.edit',$data->id) }}"
                               class="btn btn-primary">
                               Edit
                            </a>

                            <a href="javascript:void(0)"
                               class="btn btn-danger"
                               onclick="openDeleteModal('{{ route('export.delete',$data->id) }}')">
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