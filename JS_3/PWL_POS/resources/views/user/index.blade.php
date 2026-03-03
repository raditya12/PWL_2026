@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">

    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>

        <div class="card-tools">
            <a href="{{ url('user/create') }}"
               class="btn btn-sm btn-primary mt-1">
                Tambah
            </a>
        </div>
    </div>

    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table id="table_user"
               class="table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Level Pengguna</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>

</div>
@endsection


@push('css')
@endpush


@push('js')
<script>
$(document).ready(function () {

    var dataUser = $('#table_user').DataTable({
        serverSide: true, // Menggunakan server-side processing

        ajax: {
            url: "{{ url('user/list') }}",
            type: "POST",
            dataType: "json"
        },

        columns: [
            {
                // Nomor urut dari addIndexColumn()
                data: "DT_RowIndex",
                className: "text-center",
                orderable: false,
                searchable: false
            },
            {
                data: "username",
                orderable: true,
                searchable: true
            },
            {
                data: "nama",
                orderable: true,
                searchable: true
            },
            {
                // Data relasi level (ORM)
                data: "level.level_nama",
                orderable: false,
                searchable: false
            },
            {
                data: "aksi",
                orderable: false,
                searchable: false
            }
        ]
    });

});
</script>
@endpush