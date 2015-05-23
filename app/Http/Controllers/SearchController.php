<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Response;

use App\Company;
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
}
