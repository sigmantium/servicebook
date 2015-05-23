<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Company;
use App\Http\Requests\Companies\CreateCompanyRequest;
use App\Http\Requests\Companies\UpdateCompanyRequest;

use Auth;

use Illuminate\Http\Request;

class CompaniesController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$companies = Company::All();

		return view('companies.index')->with('companies', $companies);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		flash()->info('Companies are disabled by default. You need to edit the company and then enable.');
		return view('companies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCompanyRequest $request)
	{
		$company = new Company($request->all());
		$company->createdBy = Auth::user()->id;
		$company->modifiedBy = Auth::user()->id;
		$company->save();

		return Redirect::route('companies.edit', ['id' => $company->id]);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$company = Company::findorfail($id);
		return view('companies/show')->with('company', $company);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$company = Company::findOrFail($id);
		return view('companies/edit')->with('company', $company);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UpdateCompanyRequest $request)
	{
		$company = Company::findOrFail($id);
		$request->modifiedBy = Auth::user()->id;
		$company->update($request->all());

		return redirect('companies');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
