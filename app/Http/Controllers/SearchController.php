<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Response;

use App\Company;
use App\Contact;
use App\Department;
use App\VehicleMake;
use App\VehicleModel;
use Illuminate\Http\Request;

class SearchController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('index');
	}

	public function companyQuery()
	{
		$query = Input::get('company');
		$res   = Company::where('name', 'LIKE', "%$query%")->get();
		return Response::json($res);
	}


	public function departmentQuery()
	{
		$query = Input::get('department');
		$company = Input::get('company');
		if ($company) {
			$res = Department::where('companyId', '=', $company)->where('name', 'LIKE', "%$query%")->get();
		}
		else
		{
			$res = Department::where('name', 'LIKE', "%$query%")->get();
		}
		return Response::json($res);
	}

	public function contactQuery()
	{
		$query = Input::get('contact');
		$company = Input::get('company');
		if ($company){
			$res = Contact::with(['company' => function($query)
			{
				$query->where('id', '=', '$company');

			}])->where('name', 'LIKE', "%$query%")->get();
		}
		else{
			$res = Contact::where('name', 'LIKE', "%$query%")->get();
		}
		return Response::json($res);
	}


	public function vehicleMakeQuery()
	{
		$query = Input::get('make');
		$res   = VehicleMake::where('name', 'LIKE', "%$query%")->get();
		return Response::json($res);
	}


	public function vehicleModelQuery()
	{
		$query = Input::get('model');
		$make = Input::get('make');
		$res = VehicleModel::with(['make' => function($query)
		{
			$query->where('id', '=', '$make');

		}])->where('name', 'LIKE', "%$query%")->get();
		return Response::json($res);
	}
}
