<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable; //追加


class Player extends Model
{
    use Sortable; // 追加
    public $sortable = ['id', 'name', 'draft_rank_id'];// 追加
    
    protected $fillable = [
        'name', 'team_id','character', 'college_id', 'height','weight', 'draft_year_id', 'draft_rank_id', 'birthday'
    ];

    public function team()
    {    
        return $this->belongsTo('App\Team');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function college()
    {    
        return $this->belongsTo('App\College');
    }
    public function draft_year()
    {    
        return $this->belongsTo('App\Draft_year');
    }
    public function draft_rank()
    {    
        return $this->belongsTo('App\Draft_rank');
    }
    
    protected $dates = [
        'birthday', //追加する。
    ];
}
