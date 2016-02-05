<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {

    protected $table = 'items';
    protected $fillable = [
        'description',
        'partNumber',
        'supplier',
        'brand',
        'type',
        'cost',
        'sell',
        'stocked'
    ];

}
