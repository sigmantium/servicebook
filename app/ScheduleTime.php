<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ScheduleTime extends Model {

    protected $table = 'scheduleTimes';
    protected $fillable = [
        'schedule'
    ];

}
