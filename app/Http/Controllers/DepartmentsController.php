<?php namespace App\Http\Controllers;

use App\Department;
use App\Company;
use Request;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;


class DepartmentsController extends Controller {

	/**
	 * Create a new controller instance.
	 * Checks if user is logged in.
	 *
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the departments sorted by company.
	 *
	 * @return departments/index view
	 */
	public function index()
	{
		$departments = Department::with('company')->orderBy('name', 'desc')->get();
		return view('departments.index')->with('departments', $departments);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('departments.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$department = new Department(Request::Except('companyName'));
		$department->createdBy = Auth::user()->id;
		$department->modifiedBy = Auth::user()->id;
		$department->enabled = true;
		$department->save();

		return Redirect::route('departments.edit', ['id' => $department->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$department = Department::findOrFail($id);
		return view('departments/edit')->with('department', $department);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$request = Request::Except('CompanyName');
		$department = Department::findOrFail($id);
		$department->modifiedBy = Auth::user()->id;
		$department->update($request);

		return redirect('departments');
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
