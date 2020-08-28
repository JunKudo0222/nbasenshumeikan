<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draft_rank extends Model
{
    protected $fillable = [
        'rank', 
    ];

    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
