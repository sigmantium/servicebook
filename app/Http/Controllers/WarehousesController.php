<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use App\Warehouse;
use App\Http\Requests\Warehouses\CreateWarehouseRequest;
use App\Http\Requests\Warehouses\UpdateWarehouseRequest;

use Auth;
use Illuminate\Http\Request;

class WarehousesController extends Controller {

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
		$warehouses = Warehouse::All();

		return view('inventory.warehouses.index')->with('warehouses', $warehouses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('inventory.warehouses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateWarehouseRequest $request)
	{
		$warehouse = new Warehouse($request->all());
		$warehouse->createdBy = Auth::user()->id;
		$warehouse->modifiedBy = Auth::user()->id;
		$warehouse->save();

		return Redirect::route('warehouses.edit', ['id' => $warehouse->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$warehouse = Warehouse::findorfail($id);
		return view('inventory.warehouses/show')->with('warehouse', $warehouse);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$warehouse = Warehouse::findOrFail($id);
		return view('inventory.warehouses/edit')->with('warehouse', $warehouse);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UpdateWarehouseRequest $request)
	{
		$Warehouse = Warehouse::findOrFail($id);
		$request->modifiedBy = Auth::user()->id;
		$Warehouse->update($request->all());

		return redirect('warehouses');
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
