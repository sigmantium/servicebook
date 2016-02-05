<?php namespace App\Http\Requests\Inventory;

use App\Http\Requests\Request;

class CreateItem extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'partNumber' => 'required|unique:items|min:3',
			'cost' => 'required',
			'sell' => 'required',
			'description' => 'required|min:3',
		];
	}

}
