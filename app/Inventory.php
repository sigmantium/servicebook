<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = 'items';
    protected $fillable = [
        'description',
        'partNumber',
        'supplier',
        'type',
        'cost',
        'sell',
        'stocked'
    ];

}
