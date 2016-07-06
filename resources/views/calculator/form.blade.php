<div class="row">

	<div class="col-md-10 col-md-offset-2">
		
		<div class="title">
			<h3>Información General</h3>
		</div>

		<div class="form-group">
			{{ Form::label('tax', 'Impuesto:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-6">
				{{ Form::text('tax', null, ['class' => 'form-control', 'placeholder' => 'Impuesto']) }}
			</div>
			@if($errors->has('tax'))
				<div class="col-md-4">
					<small class="error">* {{ $errors->first('tax') }}</small>
				</div>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('weeks', 'Semanas:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-6">
				{{ Form::text('weeks', null, ['class' => 'form-control', 'placeholder' => 'Semanas de trabajos estimadas']) }}
			</div>
			@if($errors->has('weeks'))
				<div class="col-md-4">
					<small class="error">* {{ $errors->first('weeks') }}</small>
				</div>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('days', 'Días:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-6">
				{{ Form::text('days', null, ['class' => 'form-control', 'placeholder' => 'Días de trabajo por semana']) }}
			</div>
			@if($errors->has('days'))
				<div class="col-md-4">
					<small class="error">* {{ $errors->first('days') }}</small>
				</div>
			@endif
		</div>

		<div class="form-group">
			{{ Form::label('hours', 'Horas:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-6">
				{{ Form::text('hours', null, ['class' => 'form-control', 'placeholder' => 'Horas diarias de trabajo']) }}
			</div>
			@if($errors->has('hours'))
				<div class="col-md-4">
					<small class="error">* {{ $errors->first('hours') }}</small>
				</div>
			@endif
		</div>
		
		<div class="form-group">
			{{ Form::label('hours_cost', 'Valor Hora:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-6">
				{{ Form::text('hours_cost', null, ['class' => 'form-control', 'placeholder' => 'Costo valor hora']) }}
			</div>
			@if($errors->has('hours_cost'))
				<div class="col-md-4">
					<small class="error">* {{ $errors->first('hours_cost') }}</small>
				</div>
			@endif
		</div>

	</div><!-- col-md-10 -->

</div><!-- row -->


<div class="row">
	<div class="col-md-10 col-md-offset-2">
		
		<div class="title">
			<h3>Salarios</h3>
		</div>

		<div class="form-group">
			{{ Form::label('executive', 'Directivo:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-2">
				{{ Form::text('executive_total', null, ['class' => 'form-control', 'placeholder' => 'Cantidad']) }}
			</div>
			<div class="col-md-4">
				<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('executive', null, ['class' => 'form-control', 'placeholder' => 'Salarios para directivos']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('executive'))
					<small class="error-multiple">* {{ $errors->first('executive') }}</small><br>
				@endif
				@if($errors->has('executive_total'))
					<small class="error-multiple">* {{ $errors->first('executive_total') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('project_manager', 'Jefe de Proyectos:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-2">
				{{ Form::text('project_manager_total', null, ['class' => 'form-control', 'placeholder' => 'Cantidad']) }}
			</div>
			<div class="col-md-4">
				<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('project_manager', null, ['class' => 'form-control', 'placeholder' => 'Salarios para jefe de proyectos']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('project_manager'))
					<small class="error-multiple">* {{ $errors->first('project_manager') }}</small><br>
				@endif
				@if($errors->has('project_manager_total'))
					<small class="error-multiple">* {{ $errors->first('project_manager_total') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('designer', 'Diseñadores:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-2">
				{{ Form::text('designer_total', null, ['class' => 'form-control', 'placeholder' => 'Cantidad']) }}
			</div>
			<div class="col-md-4">
				<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('designer', null, ['class' => 'form-control', 'placeholder' => 'Salarios para diseñadores']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('designer'))
					<small class="error-multiple">* {{ $errors->first('designer') }}</small><br>
				@endif
				@if($errors->has('designer_total'))
					<small class="error-multiple">* {{ $errors->first('designer_total') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('programmer', 'Programadores:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-2">
				{{ Form::text('programmer_total', null, ['class' => 'form-control', 'placeholder' => 'Cantidad']) }}
			</div>
			<div class="col-md-4">
				<div class="input-group">
				<span class="input-group-addon">$</span>
				{{ Form::text('programmer', null, ['class' => 'form-control', 'placeholder' => 'Salarios para programadores']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('programmer'))
					<small class="error-multiple">* {{ $errors->first('programmer') }}</small><br>
				@endif
				@if($errors->has('programmer_total'))
					<small class="error-multiple">* {{ $errors->first('programmer_total') }}</small>
				@endif
			</div>
		</div>

	</div><!-- col-md-12 -->

</div><!-- row -->


<div class="row">

	<div class="col-md-6">

		<div class="title">
			<h3>Gastos Operativos</h3>
		</div>

		<div class="form-group">
			{{ Form::label('rent', 'Renta:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('rent', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Renta']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('rent'))
					<small class="error">* {{ $errors->first('rent') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('light', 'Luz:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('light', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Luz']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('light'))
					<small class="error">* {{ $errors->first('light') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('phone', 'Teléfono Fijo:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Teléfono Fijo']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('phone'))
					<small class="error">* {{ $errors->first('phone') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('mobile', 'Teléfono Móvil:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Teléfono Móvil']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('mobile'))
					<small class="error">* {{ $errors->first('mobile') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('internet', 'Internet:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('internet', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Internet']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('internet'))
					<small class="error">* {{ $errors->first('internet') }}</small>
				@endif
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('water', 'Agua:', ['class' => 'col-md-2 control-label']) }}
			<div class="col-md-4">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					{{ Form::text('water', null, ['class' => 'form-control', 'placeholder' => 'Gastos de Agua']) }}
				</div>
			</div>
			<div class="col-md-4">
				@if($errors->has('water'))
					<small class="error">* {{ $errors->first('water') }}</small>
				@endif
			</div>
		</div>

	</div><!-- col-md-6 -->

	<div class="col-md-6">
		<div class="title">
			<h3>Gastos Variables</h3>

			<div class="form-group">
				{{ Form::label('software', 'Software:', ['class' => 'col-md-2 control-label']) }}
				<div class="col-md-4">
					<div class="input-group">
						<span class="input-group-addon">$</span>
						{{ Form::text('software', null, ['class' => 'form-control', 'placeholder' => 'Gastos en agua']) }}
					</div>
				</div>
				<div class="col-md-4">
					@if($errors->has('software'))
						<small class="error">* {{ $errors->first('software') }}</small>
					@endif
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('travel', 'Viático:', ['class' => 'col-md-2 control-label']) }}
				<div class="col-md-4">
					<div class="input-group">
						<span class="input-group-addon">$</span>
						{{ Form::text('travel', null, ['class' => 'form-control', 'placeholder' => 'Gastos en viáticos']) }}
					</div>
				</div>
				<div class="col-md-4">
					@if($errors->has('travel'))
						<small class="error">* {{ $errors->first('travel') }}</small>
					@endif
				</div>
			</div>

			<div class="form-group">
				{{ Form::label('audiovisual', 'Audiovisual:', ['class' => 'col-md-2 control-label']) }}
				<div class="col-md-4">
					<div class="input-group">
						<span class="input-group-addon">$</span>
						{{ Form::text('audiovisual', null, ['class' => 'form-control', 'placeholder' => 'Gastos en video, fotografía o audio']) }}
					</div>
				</div>
				<div class="col-md-4">
					@if($errors->has('audiovisual'))
						<small class="error">* {{ $errors->first('audiovisual') }}</small>
					@endif
				</div>
			</div>

		</div>
	</div>

</div><!-- row -->