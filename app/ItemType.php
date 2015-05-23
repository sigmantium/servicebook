<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model {


    protected $table = 'itemTypes';
    protected $fillable = [
        'name'
    ];


}
