<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

use App\DailyNote;
use Auth;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('home');
	}

	public function storeNote()
	{
		$currentPage = Request::only('currentPage');

		$note = new DailyNote(Request::Except('currentPage'));
		$note->createdBy = Auth::user()->id;
		$note->modifiedBy = Auth::user()->id;
		$note->save();
		return redirect($currentPage['currentPage']);
	}

	public function completeNote($id)
	{
		$note = DailyNote::findOrFail($id);
		$note->completed = true;
		$note->save();
	}


	public function viewNote($id)
	{
		Auth::user()->notes()->attach($id);
	}
}
