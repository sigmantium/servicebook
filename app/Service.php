<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model {

    protected $table = 'services';
    protected $fillable = [
        'priority',
        'type',
        'method',
        'date',
        'due',
        'available',
        'serviceNotes',
        'invoiceNotes',
        'orderNumber',
        'speedo',
        'status',
        'vehicleId',
        'contactId',
        'fleetId',
        'companyId',
        'departmentId',
        'disposal',
        'rego',
        'makeId',
        'modelId',
        'year',
        'vin',
        'body',
        'series',
        'transmission',
        'assetNumber',
        'notes'
    ];

    public function make()
    {
        return $this->belongsTo('App\VehicleMake', 'makeId', 'id');
    }

    public function model()
    {
        return $this->belongsTo('App\VehicleModel', 'modelId', 'id');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact', 'contactId', 'id');
    }

    public function company()
    {
        return $this->belongsTo('App\Company', 'companyId', 'id');
    }

    public function department()
    {
        return $this->belongsTo('App\Department', 'departmentId', 'id');
    }
}
