<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $table = 'companies';
    protected $fillable = [
        'name',
        'notes',
        'account',
        'enabled'
    ];



    public function contacts()
    {
        return $this->hasMany('App\Contact', 'companyId', 'id');
    }
}
