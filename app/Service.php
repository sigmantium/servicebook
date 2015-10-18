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
        'disposal'
    ];

}
