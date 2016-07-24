<div class="row">

	<div class="col-md-9 col-md-offset-3">
		
		<div class="title">
			<h3>Información General</h3>
		</div>

		<div class="form-group">

			{{ Form::label('name', 'Nombre:', ['class' => 'col-md-2 control-label']) }}

			{!! Form::token() !!}

			<div class="col-md-4">
				{{ Form::text('name', null, ['class' => 'form-control col-md-4', 'placeholder' => 'Nombre del empleado']) }}

				@if($errors->has('name'))
					<small class="error">* {{ $errors->first('name') }}</small>
				@endif
			</div>

			<div class="col-md-6"></div>

		</div><!-- form-group -->

		<div class="form-group">

			{{ Form::label('position', 'Cargo:', ['class' => 'col-md-2 control-label']) }}

			{!! Form::token() !!}

			<div class="col-md-4">
				{{ Form::text('position', null, ['class' => 'form-control col-md-4', 'placeholder' => 'Cargo del empleado']) }}

				@if($errors->has('position'))
					<small class="error">* {{ $errors->first('position') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div><!-- form-group -->

		<div class="form-group">

			{{ Form::label('price_hour', 'Valor Hora:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">

				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::number('price_hour', null, ['class' => 'form-control', 'placeholder' => 'Valor Hora de trabajo']) }}
				</div>

				@if($errors->has('price_hour'))
					<small class="error">* {{ $errors->first('price_hour') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div><!-- form-group -->

	</div><!-- col-md-10 -->

</div><!-- row -->