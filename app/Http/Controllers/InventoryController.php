<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use db;


use App\Inventory;
use App\ItemType;
use App\Http\Requests;
use App\Http\Requests\Inventory\CreateItemType;
use App\Http\Requests\Inventory\CreateItem;

use Illuminate\Http\Request;
use Auth;

class InventoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$items = Inventory::all();
		return view('inventory.stock.index')->with('items', $items);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$itemTypes = DB::table('itemTypes')->orderBy('name', 'asc')->get()->lists('name','id');
		return view('inventory.stock.createItem')->with('itemTypes', $itemTypes);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateItem $request)
	{
		$item = new Inventory($request->all());
		$item->createdBy = Auth::user()->id;
		$item->save();

		return redirect('inventory');
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

	public function itemTypes()
	{
		$types = ItemType::all();
		return view('inventory.stock.itemTypes')->with('types', $types);
	}

	public function createItemType()
	{
		return view('inventory.stock.createItemType');
	}

	public function storeItemType(CreateItemType $request)
	{

		$type = new ItemType($request->all());
		$type->createdBy = Auth::user()->id;
		$type->save();

		return redirect('inventory/itemTypes');
	}
}
