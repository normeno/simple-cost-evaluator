<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Datatables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Requests\StoreEmployeeRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreEmployeeRequest $request)
    {
        Employee::create($request->all());

        return redirect('/employee')->with('success', 'Éxito al crear empleado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Requests\UpdateEmployeeRequest|Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\UpdateEmployeeRequest $request, $id)
    {
        $employee = Employee::find($id);
        $employee->fill($request->all());
        $employee->save();

        return redirect('/employee')->with('success', 'Éxito al editar empleado!');
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

    /**
     * @param null $type
     * @return mixed
     */
    public function datatable($company)
    {
        $employees = Employee::where('company_id', $company);

        return Datatables::of($employees)
            ->addColumn('operations','
                {{ link_to_route("employee.edit", "Editar", ["employee" => $id], ["class" => "btn btn-default btn-xs"]) }}
                {{ link_to_route("employee.edit", "Empleados", ["employee" => $id], ["class" => "btn btn-default btn-xs"]) }}
                {{ link_to_route("employee.edit", "Presupuestos", ["employee" => $id], ["class" => "btn btn-default btn-xs"]) }}
                ')
            ->removeColumn('id')
            ->make(true);
    }
}
