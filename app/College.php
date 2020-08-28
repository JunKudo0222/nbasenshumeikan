<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function players()
    {
        return $this->hasMany('App\Player');
    }
}
