@extends('layouts.frontend')

@section('content')

    {{
        Form::model($company, [
            'method' => 'PUT',
            'route' => ['company.update', $company->id],
            'class' => 'form-horizontal',
            'files' => true
        ])
    }}

        @include('company.form')

        <div class="row">
            <div class="col-md-12 text-center">
                {{ Form::submit('Guardar', ['class' => 'btn btn-general']) }}
            </div>
        </div>

    {!! Form::close() !!}

@endsection