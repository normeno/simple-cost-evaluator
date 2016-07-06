@extends('layouts.frontend')

@section('content')

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Impuesto</th>
        <th>Actiones</th>
    </thead>
</table>

@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('/bower_resources/datatables.net-bs/css/dataTables.bootstrap.min.css')  }}">
<link rel="stylesheet" href="{{ asset('/bower_resources/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')  }}">
@endpush

@push('scripts')

@include('layouts.partials.datatable')

<script>
    $(function() {

        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: '/company/datatable/',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'tax', name: 'tax' },
                { data: 'operations', name: 'operations' },
            ]
        });
    });
</script>

@endpush