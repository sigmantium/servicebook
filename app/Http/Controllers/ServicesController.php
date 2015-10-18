<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Service\ServiceStatusRequest;
use App\Http\Controllers\Controller;

use App\VehicleMake;
use App\VehicleModel;
use App\ServiceStatus;
use App\Service;

use Request;
use Auth;

class ServicesController extends Controller {

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
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$makes = VehicleMake::orderBy('name')->lists('name', 'id');
		$statuses = ServiceStatus::orderBy('status', 'asc')->lists('status');
		return view('services.create')->with('statuses', $statuses);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$service = new Service(Request::Except('companyName'));
		$service->createdBy = Auth::user()->id;
		$service->modifiedBy = Auth::user()->id;
		$service->save();

		return Redirect::route('services.edit', ['id' => $service->id]);
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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



	public function createServiceStatus()
	{
		return view('services.createServiceStatus');
	}

	public function storeServiceStatus(ServiceStatusRequest $request)
	{
		$schedule = new ServiceStatus($request->all());
		$schedule->createdBy = Auth::user()->id;
		$schedule->save();

		return redirect('services/serviceStatuses');

	}

	public function serviceStatuses()
	{
		$statuses = ServiceStatus::orderBy('status', 'asc')->lists('status');
		return view('services.servicestatuses')->with('statuses', $statuses);

	}
}
