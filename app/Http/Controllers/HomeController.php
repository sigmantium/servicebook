<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use DB;
use App\DailyNote;
use Auth;
use App\Service;

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
		$count_list = DB::table('services')
			->select(DB::raw('SUM(CASE WHEN type = \'Service\' THEN 1 ELSE 0 END) as Services_Count,SUM(CASE WHEN type = \'Repair\' THEN 1 ELSE 0 END) as Repairs_Count,SUM(CASE WHEN type = \'Both\' THEN 1 ELSE 0 END) as Both_Count,SUM(Disposal) as Disposal_Count'))
			->where('status', '=', 'Booking')
			->get();
		$date = Request::Input('booking_date');
		if(!$date) { $date = date('d-m-Y');}
		$bookings = Service::Where('date', '=', $date)->orderBy('available', 'asc')->get();
		return view('home')->with(['bookings'=> $bookings,'date'=>$date, 'count_list'=>$count_list]);
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
