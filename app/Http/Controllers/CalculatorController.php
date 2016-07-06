<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StoreCalculatorRequest;

use Redirect;

use Session;

use App\Budget;

use Yajra\Datatables\Facades\Datatables;

class CalculatorController extends Controller
{
    public function __construct()
    {
        currency()->create([
            'title' => 'Chilean Peso',
            'symbol_left' => '$',
            'symbol_right' => '',
            'decimal_place' => 0,
            'value' => '1.0000',
            'decimal_point' => ',',
            'thousand_point' => '.',
            'code' => 'CLP',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $budgets = Budget::all();

        return view('calculator.index', compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calculator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCalculatorRequest $request)
    {
        Budget::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $budget = Budget::find($id);
        $budget->months = $budget->weeks / 4;
        
        $budget->executive_month    = Budget::salaryMonth($id, 'executive');
        $budget->pm_month           = Budget::salaryMonth($id, 'project_manager');
        $budget->designer_month     = Budget::salaryMonth($id, 'designer');
        $budget->programmer_month   = Budget::salaryMonth($id, 'programmer');

        $budget->total_without_tax  = Budget::getTotalWithoutTax($id);
        $budget->total_tax          = $budget->total_without_tax * $budget->tax;
        $budget->total_with_tax     = $budget->total_without_tax + $budget->total_tax;

        $budget->month_without_tax  = $budget->total_without_tax / $budget->months;
        $budget->month_tax          = $budget->month_without_tax * $budget->tax;
        $budget->month_with_tax     = $budget->month_without_tax + $budget->month_tax;

        return view('calculator.show', compact('budget'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function datatable($type = null)
    {
        $budgets = Budget::all();

        return Datatables::of($budgets)
            ->addColumn('operations',
                '<a href="{{ URL::route( \'calculator.show\', [$id] ) }}">Ver</a>
                <a href="{{ URL::route( \'calculator.edit\', [$id] ) }}">Editar</a>
                <a href="{{ URL::route( \'calculator.destroy\', [$id] ) }}">Eliminar</a>
                ')
            ->removeColumn('id')
            ->make(true);
    }
}
