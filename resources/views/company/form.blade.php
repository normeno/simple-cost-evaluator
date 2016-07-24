<div class="row">

	<div class="col-md-9 col-md-offset-3">
		
		<div class="title">
			<h3>Información General</h3>
		</div>

		<div class="form-group">

			{{ Form::label('Logo', 'Logo:', ['class' => 'col-md-2 control-label']) }}

			{!! Form::token() !!}

			<div class="col-md-4">
				{{ Form::file('logo', ['class' => 'form-control col-md-4', 'placeholder' => 'Nombre de la empresa']) }}

				@if($errors->has('logo'))
					<small class="error">* {{ $errors->first('logo') }}</small>
				@endif
			</div>

			<div class="col-md-6"></div>

		</div><!-- form-group -->

		<div class="form-group">

			{{ Form::label('name', 'Nombre:', ['class' => 'col-md-2 control-label']) }}

			{!! Form::token() !!}

			<div class="col-md-4">
				{{ Form::text('name', null, ['class' => 'form-control col-md-4', 'placeholder' => 'Nombre de la empresa']) }}

				@if($errors->has('name'))
					<small class="error">* {{ $errors->first('name') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div><!-- form-group -->

		<div class="form-group">

			{{ Form::label('tax', 'Impuesto:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">

				<div class="input-group">
					{{ Form::number('tax', null, ['class' => 'form-control', 'placeholder' => 'Impuesto']) }}
					<span class="input-group-addon">%</span>
				</div>

				@if($errors->has('tax'))
					<small class="error">* {{ $errors->first('tax') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div><!-- form-group -->

	</div><!-- col-md-10 -->

</div><!-- row -->

{{ Session::forget('error') }}