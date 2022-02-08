@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Fraud</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item">
                <a href="index.html">Litigation</a>
            </li>
            <li class="breadcrumb-item active">Fraud</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                    <thead>
                        <tr>

                            <td>Nomor Kasus</td>
                            <td>Nama</td>
                            <td>Tanggal</td>
                            <td>Status</td>
                            <td>Aksi</td>

                        </tr>

                    <tbody>

                    </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                // // { data: 'id', name:'id' }

                {
                    data: 'no_kasus',
                    name: 'no_kasus'
                },
                {
                    data: 'user.name',
                    name: 'user.name'
                },
                {
                    data: 'tanggal',
                    name: 'tanggal'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                // { data: 'user.fraud.tanggal', name:'user.fraud.tanggal' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]


        })
    </script>
@endpush
