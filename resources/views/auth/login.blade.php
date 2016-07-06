@extends('layouts.auth')

@section('content')

<section class="auth text-center">

    <div class="auth-error">
        @if(count($errors) > 0)
            @include('alerts.error')
        @endif
    </div>

    <div class="auth-form">
        {!! Form::open(['/auth/login', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
            
            {!! csrf_field() !!}

            <div class="form-group">
                {{ Form::label('email', 'Email:', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                </div>
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:', ['class' => 'control-label col-sm-2']) }}
                <div class="col-sm-10">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>
            </div>

            <div class="form-group">
                <label>
                    {{ Form::checkbox('remember', null) }} Recordarme
                </label>
            </div>

            <br>

            <div class="form-group text-center">
                {{ Form::submit('Ingresar', ['class' => 'btn btn-default']) }}
            </div>

        {!! Form::close() !!}
    </div>

</section>
@endsection