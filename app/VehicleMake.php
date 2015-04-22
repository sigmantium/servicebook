<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicleMake extends Model {

    protected $table = 'vehicleMakes';
	protected $fillable = [
        'name'
    ];

}
