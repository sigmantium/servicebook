<?php namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function nameLink()
    {
        return HTML::linkAction('contactsController@show', $this->name, $this->id);
    }
}
