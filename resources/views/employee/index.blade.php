@extends('layouts.frontend')

@section('content')

    {{ link_to_route('employee.create', 'Crear Empleado', null, ['class' => 'btn btn-default btn-create']) }}


    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Cargo</th>
            <th>Valor Hora</th>
            <th>Acciones</th>
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
        var company = "{{ $company }}";
        var table = $('.table').DataTable({
            processing: true,
            serverSide: true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: '/employee/{company}/datatable/',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'position', name: 'position' },
                { data: 'price_hour', name: 'price_hour' },
                { data: 'operations', name: 'operations' },
            ],
            columnsDef: [
                {
                    targets: 1,
                    render: 123
                }
            ],
        });
    });
</script>

@endpush