<?php namespace App;

use App\DailyNote;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password','enabled','admin'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function unreadNotes()
	{
		$ids = DB::table('dailyNote_user')->where('user_id', '=', $this->id)->lists('note_id');
		return DailyNote::where('completed', 0)->whereNotIn('id', $ids)->orderBy('id', 'desc')->get();
	}

	public function notes()
	{
		return $this->belongsToMany('App\dailyNote', 'dailyNote_user', 'user_id', 'note_id')->withTimestamps();
	}
}
