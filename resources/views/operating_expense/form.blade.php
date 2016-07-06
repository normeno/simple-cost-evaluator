<div class="row">

	<div class="col-md-9 col-md-offset-3">
		
		<div class="title">
			<h3>Gastos Operativos base</h3>
		</div>

		<div class="form-group">
			
			{{ Form::label('rent', 'Renta:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">
				
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::number('rent', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Renta']) }}
				</div>

				@if($errors->has('rent'))
					<small class="error">* {{ $errors->first('rent') }}</small>
				@endif

			</div>
			
			<div class="col-md-6"></div>

		</div>

		<div class="form-group">
			
			{{ Form::label('light', 'Luz:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">
				
				<div class="input-group">
					
					<span class="input-group-addon">$</span>
					
					{{ Form::number('light', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Luz']) }}

				</div>

				@if($errors->has('light'))
					<small class="error">* {{ $errors->first('light') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div>

		<div class="form-group">
			
			{{ Form::label('phone', 'Teléfono Fijo:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::number('phone', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Teléfono Fijo']) }}
				</div>

				@if($errors->has('phone'))
					<small class="error">* {{ $errors->first('phone') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div>

		<div class="form-group">
			
			{{ Form::label('mobile', 'Teléfono Móvil:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::number('mobile', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Teléfono Móvil']) }}
				</div>

				@if($errors->has('mobile'))
					<small class="error">* {{ $errors->first('mobile') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div>

		<div class="form-group">
			
			{{ Form::label('internet', 'Internet:', ['class' => 'col-md-2 control-label']) }}
			
			<div class="col-md-4">
				<div class="input-group">
					
					<span class="input-group-addon">$</span>
					
					{{ Form::number('internet', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Internet']) }}

				</div>

				@if($errors->has('internet'))
					<small class="error">* {{ $errors->first('internet') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div>

		<div class="form-group">

			{{ Form::label('water', 'Agua:', ['class' => 'col-md-2 control-label']) }}

			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					
					{{ Form::number('water', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Agua']) }}
				</div>

				@if($errors->has('water'))
					<small class="error">* {{ $errors->first('water') }}</small>
				@endif
			</div>
			
			<div class="col-md-6"></div>

		</div>

	</div><!-- col-md-10 -->

</div><!-- row -->