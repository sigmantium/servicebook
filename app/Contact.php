<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Html;
class Contact extends Model {

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'phone',
        'mobile',
        'fax',
        'email',
        'notes',
        'companyId',
        'departmentId',
        'enabled'
    ];

    public function getNameLink()
    {
        return link_to_action('ContactsController@show', $this->name, ['id' => $this->id]);
    }


    public function company()
    {
        return $this->belongsTo('App\Company', 'companyId');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'departmentId');
    }
}
