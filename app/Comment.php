<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment', 'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function player()
    {
        return $this->belongsTo('App\Player');
    }
}
