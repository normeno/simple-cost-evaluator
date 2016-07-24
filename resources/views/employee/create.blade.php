@extends('layouts.frontend')

@section('content')

    {!!
        Form::open([
            'route' => 'employee.store',
            'method' => 'POST',
            'class' => 'form-horizontal',
            'files' => true])
    !!}

        @include('employee.form')

        <div class="row">
            <div class="col-md-12 text-center">
                {{ Form::submit('Crear', ['class' => 'btn btn-general']) }}
            </div>
        </div>

    {!! Form::close() !!}

@endsection