<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceStatus extends Model {

    protected $table = 'serviceStatuses';
    protected $fillable = [
        'status'
    ];


}
