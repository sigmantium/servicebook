<?php namespace App\Http\Requests\Users;

use App\Http\Requests\Request;
use App\User;

class UserRequest extends Request {

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
		$user = User::find($this->users);

		switch($this->method())
		{
			case 'GET':
			case 'DELETE':
			{
				return [];
			}
			case 'POST':
			{
				return [
					'name' => 'required|unique:users|min:3',
					'email' => 'required|unique:users|min:3'
				];
			}
			case 'PUT':
			case 'PATCH':
			{
				return [
					'name' => 'required|min:3|unique:users,name'.$user->id,
					'email' => 'required|min:3|unique:users,email,'.$user->id
				];
			}
			default:break;
		}
	}

}
