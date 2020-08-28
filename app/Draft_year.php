<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Draft_year extends Model
{
    protected $fillable = [
        'year', 
    ];

    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
