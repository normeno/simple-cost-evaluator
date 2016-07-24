<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreCompanyRequest;
use App\Company;
use Redirect;
use Auth;
use Symfony\Component\HttpFoundation\File\File;
use Yajra\Datatables\Datatables;
use Session;

class CompanyController extends Controller
{
    /**
     * CompanyController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyRequest $request)
    {
        $request['user_id'] = Auth::user()->id;

        Company::create($request->all());

        return redirect('/company')->with('success', 'Éxito al crear registro!');
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
        $company = Company::find($id);
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyRequest $request, $id)
    {
        $company = Company::find($id);
        $company->fill($request->all());
        $company->save();

        return redirect('/company')->with('success', 'Éxito al modificar registro!');
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
        $companies = Company::where('user_id', Auth::user()->id);

        return Datatables::of($companies)
            ->editColumn('logo', function ($company) {
                $image = asset("/images/{$company->logo}");

                if (!empty($company->logo) && file_exists(public_path('images/'.$company->logo))) {
                    return "<img src='{$image}' width='100px'/>";
                }

                return '';
            })
            ->editColumn('tax', function ($company) {
                return "{$company->tax}%";
            })
            ->addColumn('operations','
                {{ link_to_route("company.edit", "Editar", ["company" => $id], ["class" => "btn btn-default btn-xs"]) }}
                {{ link_to_route("company.employees", "Empleados", ["company" => $id], ["class" => "btn btn-default btn-xs"]) }}
                {{ link_to_route("company.edit", "Presupuestos", ["company" => $id], ["class" => "btn btn-default btn-xs"]) }}
                ')
            ->removeColumn('id')
            ->make(true);
    }

    public function employees($company)
    {
        return view('employee.index', compact('company'));
    }
}
