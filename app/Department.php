<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model {


    protected $table = 'departments';
    protected $fillable = [
        'name',
        'notes',
        'account',
        'fax',
        'phone',
        'address',
        'suburb',
        'postcode',
        'state',
        'primaryContact',
        'companyId',
        'accountsContact'
    ];

    public function contacts()
    {
        return $this->hasmany('App\Contact');
    }

    public function primaryContact()
    {
        return $this->hasOne('App\Contact', 'id', 'primaryContact');
    }

    public function company()
    {
        return $this->belongsTo('App\Company', 'companyId', 'id');
    }


}
