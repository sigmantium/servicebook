<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model {

    protected $table = 'vehicleModels';
    protected $fillable = [
        'name',
        'parentMake'
    ];

    function make()
    {
       return $this->belongsTo('App\VehicleMake', 'parentMake', 'id');
    }
}
