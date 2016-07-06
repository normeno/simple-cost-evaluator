@extends('layouts.frontend')

@section('content')

{!! Form::open(['route' => 'calculator.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

	@include('calculator.form')

	<div class="row">
		<div class="col-md-12 text-center">
			{{ Form::submit('Generar Presupuesto',['class' => 'btn btn-general']) }}
		</div>
	</div>

{!! Form::close() !!}

@endsection