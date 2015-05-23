<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\VehicleMake;
use App\VehicleModel;
use App\ScheduleKM;
use App\ScheduleTime;

use Request;
use App\Http\Requests\Vehicles\CreateSchedule;
use App\Http\Requests\Vehicles\CreateVehicleMake;
use App\Http\Requests\Vehicles\CreateVehicleModel;

use Auth;

class vehiclesController extends Controller {

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
		return view('vehicles.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

	/**
	 * Create a make type for vehicles
	 */
	public function createMake()
	{
		return view('vehicles.createMake');
	}

	/**
	 * Store a newly created vehicleMake resource in storage.
	 *
	 * @return Response
	 */
	public function storeMake(CreateVehicleMake $request)
	{
		$make = new VehicleMake($request->all());
		$make->createdBy = Auth::user()->id;

		$make->save();

		return redirect('vehicles/vehicleMakes');

	}

	/**
	 * Displays a list of vehicle Makes.
	 */
	public function vehicleMakes()
	{
		$makes = VehicleMake::all();
		return view('vehicles.vehicleMakes')->with('makes', $makes);

	}
	/**
	 * Create a model type for vehicles
	 */
	public function createModel()
	{
		$makes = VehicleMake::orderBy('name')->lists('name', 'id');
		return view('vehicles.createModel')->with('makes', $makes);
	}

	/**
	 * Store a newly created vehicleModel resource in storage.
	 *
	 * @return Response
	 */
	public function storeModel(CreateVehicleModel $request)
	{
		$model = new VehicleModel($request->all());
		$model->createdBy = Auth::user()->id;
		$model->save();

		return redirect('vehicles/vehicleModels');

	}

	/**
	 * Displays a list of vehicle Models.
	 */
	public function vehicleModels()
	{
		$models = VehicleModel::With('make')->orderBy('name', 'desc')->get();
		return view('vehicles.vehicleModels')->with('models', $models);

	}

	/**
	 * Create a make type for vehicles
	 */
	public function createScheduleKMs()
	{
		return view('vehicles.createScheduleKMs');
	}

	/**
	 * Store a newly created vehicleMake resource in storage.
	 *
	 * @return Response
	 */
	public function storeScheduleKMs(CreateSchedule $request)
	{
		$schedule = new ScheduleKM($request->all());
		$schedule->createdBy = Auth::user()->id;
		$schedule->save();

		return redirect('vehicles/scheduleKMs');

	}

	/**
	 * Displays a list of vehicle Models.
	 */
	public function scheduleKMs()
	{
		$schedules = ScheduleKM::orderBy('schedule', 'asc')->lists('schedule');
		return view('vehicles.scheduleKMs')->with('schedules', $schedules);

	}

	/**
	 * Create a make type for vehicles
	 */
	public function createScheduleTimes()
	{
		return view('vehicles.createScheduleTimes');
	}

	/**
	 * Store a newly created vehicleMake resource in storage.
	 *
	 * @return Response
	 */
	public function storeScheduleTimes(CreateSchedule $request)
	{
		$schedule = new ScheduleTime($request->all());
		$schedule->createdBy = Auth::user()->id;
		$schedule->save();

		return redirect('vehicles/scheduleTimes');

	}

	/**
	 * Displays a list of vehicle Models.
	 */
	public function scheduleTimes()
	{
		$schedules = ScheduleTime::orderBy('schedule', 'asc')->lists('schedule');
		return view('vehicles.scheduleTimes')->with('schedules', $schedules);

	}
}
