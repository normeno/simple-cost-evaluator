@extends('layouts.frontend')

@section('content')

{!! Form::open(['route' => 'operating_expense.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

	@include('operating_expense.form')

	<div class="row">
		<div class="col-md-12 text-center">
			{{ Form::submit('Guardar', ['class' => 'btn btn-general']) }}
		</div>
	</div>

{!! Form::close() !!}

@endsection