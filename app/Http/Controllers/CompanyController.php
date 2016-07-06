<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\StoreCompanyRequest;

use App\Company;

use Redirect;

use Auth;
use Yajra\Datatables\Datatables;

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

        Session::flash('success', 'Éxito al crear registro!');

        return redirect('/company');
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
        //return Datatables::of(User::all())->make(true);
        $company = Company::where('user_id', Auth::user()->id);

        return Datatables::of($company)
            ->addColumn('operations',
                '<a href="{{ URL::route( \'company.edit\', [$id] ) }}">editar</a>
                 <a href="{{ URL::route( \'company.destroy\', [$id] ) }}">eliminar</a>
                ')
            ->removeColumn('id')

            ->make(true);
    }
}
