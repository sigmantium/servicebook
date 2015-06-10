<?php namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\Contacts\CreateContactRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

use Request;
use Auth;


class ContactsController extends Controller {

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
	 * @return contact.index.blade.php view with contacts.
	 */
	public function index()
	{
		$contacts = Contact::All();
		return view('contacts.index')->with('contacts', $contacts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$contact = new Contact(Request::Except('companyName'));
		$contact->createdBy = Auth::user()->id;
		$contact->modifiedBy = Auth::user()->id;
		$contact->enabled = true;
		$contact->save();

		return Redirect::route('contacts.edit', ['id' => $contact->id]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		dd($id);
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

}
