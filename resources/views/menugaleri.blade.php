@extends('layouts.app')
@section('content')

<div class="right ml-3">
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-arrow-alt-circle-down"> Export</i>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('export.galeri') }}"><i class="fas fa-file-export"> Excel</i></a>
            <a class="dropdown-item" href="{{route('print.galeri') }}"><i class="fas fa-file-export"> PDF</i></a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <table class="table mt-3" id="table">
                <thead>
                    <tr class="bg-info">
                        <th>ID</th>
                        <th width="300">Gambar</th>
                        <th width="150">Dibuat</th>
                        <th width="200">Author</th>
                        <th width="200">Modify<a class="btn btn-light" style="margin-left:25px;"
                                href="{{url('tambahgaleri') }}"><i class="fas fa-plus"> Tambah</i></a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<script>
    $(document).ready(function () {
        $('#table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'galeri/json',
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'gambar',
                    name: 'gambar'
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'author',
                    name: 'author'
                },
                {
                    "data": "id",
                    "searchable": false,
                    "sortable": false,
                    "render": function (id, type, full, meta) {
                        return '<a href="/deletegaleri/' + id +
                            '" class="btn btn-danger">Delete</a>';
                    }
                },
            ]
        })
    })

</script>

@endsection
