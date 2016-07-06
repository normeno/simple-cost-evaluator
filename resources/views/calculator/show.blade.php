@extends('layouts.frontend')

@section('content')
<section class="preview text-center">

	<h2>Salarios</h2>
	<table class="table table-bordered table-hover table-condensed">
		<tr>
			<td></td>
			<td><strong>Mensual</strong></td>
			<td><strong>Total</strong></td>
		</tr>
		<tr>
			<td><strong>Directivos</strong></td>
			<td>{{ Currency::format($budget->executive_month, 'CLP') }}</td>
			<td>{{ Currency::format($budget->executive_month * $budget->months, 'CLP') }}</td>
		</tr>
		<tr>
			<td><strong>Jefe de Proyecto</strong></td>
			<td>{{ Currency::format($budget->pm_month, 'CLP') }}</td>
			<td>{{ Currency::format($budget->pm_month * $budget->months, 'CLP') }}</td>
		</tr>
		<tr>
			<td><strong>Diseñadores</strong></td>
			<td>{{ Currency::format($budget->designer_month, 'CLP') }}</td>
			<td>{{ Currency::format($budget->designer_month * $budget->months, 'CLP') }}</td>
		</tr>
		<tr>
			<td><strong>Programadores</strong></td>
			<td>{{ Currency::format($budget->programmer_month, 'CLP') }}</td>
			<td>{{ Currency::format($budget->programmer_month * $budget->months, 'CLP') }}</td>
		</tr>
	</table>

	<h2>Costos del Proyecto</h2>
	<table class="table table-bordered table-hover table-condensed">
		<tr>
			<td></td>
			<td><strong>Mensual</strong></td>
			<td><strong>Total</strong></td>
		</tr>
		<tr>
			<td><strong>Costo sin Impuesto</strong></td>
			<td>{{ Currency::format($budget->month_without_tax, 'CLP') }}</td>
			<td>{{ Currency::format($budget->total_without_tax, 'CLP') }}</td>
		</tr>
		<tr>
			<td><strong>Impuesto</strong></td>
			<td>{{ Currency::format($budget->month_tax, 'CLP') }}</td>
			<td>{{ Currency::format($budget->total_tax, 'CLP') }}</td>
		</tr>
		<tr>
			<td><strong>Costo Total</strong></td>
			<td>{{ Currency::format($budget->month_with_tax, 'CLP') }}</td>
			<td>{{ Currency::format($budget->total_with_tax, 'CLP') }}</td>
		</tr>
	</table>

	<h2>Costo total del proyecto</h2>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Costo</th>
				<th>Impuesto</th>
				<th>Total</th>
				<th>Meses</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td>{{ $budget->months }} meses</td>
			</tr>
		</tbody>
	</table>

	<h2>Propuesta económica</h2>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Valor</th>
				<th>Impuesto</th>
				<th>Valor Total</th>
				<th>Tiempo de desarrollo</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ Currency::format($budget->project_cost, 'CLP') }}</td>
				<td>{{ Currency::format($budget->tax, 'CLP') }}</td>
				<td>{{ Currency::format($budget->total, 'CLP') }}</td>
				<td>{{ $budget->months }}</td>
			</tr>
		</tbody>
	</table>

	<h2>Profit</h2>
	<table class="table table-bordered table-hover table-condensed">
		<thead>
			<tr>
				<th>Profit</th>
				<th>Impuesto</th>
				<th>Profit Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ Currency::format($budget->project_cost - ($budget->month_cost * $budget->months), 'CLP') }}</td>
				<td>{{ Currency::format($budget->tax - ($budget->month_tax * $budget->months), 'CLP') }}</td>
				<td>{{ Currency::format($budget->total - ($budget->month_total * $budget->months), 'CLP') }}</td>
			</tr>
		</tbody>
	</table>
</section>
@endsection