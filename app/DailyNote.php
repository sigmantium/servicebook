<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyNote extends Model {

    protected $table = 'dailyNotes';
    protected $fillable = [
        'note',
        'dueTime'
    ];

    public function scopeUserNotRead($query, $user_id)
    {
        $query->whereNotIn('id', function ($query) use ($user_id)
        {
            $query->select('note_id')
                ->table('dailyNote_user')
                ->where('user_id', '=', $user_id);
        });
    }



}