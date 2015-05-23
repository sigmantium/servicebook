<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleMake extends Model {

    protected $table = 'vehicleMakes';
	protected $fillable = [
        'name'
    ];
    function models()
    {
        return $this->hasMany('App\VehicleModel', 'parentMake')->orderBy('name', 'desc');
    }
}
