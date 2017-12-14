<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false;
    public function languages()
    {
        return $this->belongsToMany('App\Language');
    }
    public function supports()
    {
        return $this->belongsToMany('App\Support');
    }
    public function  authors()
    {
        return $this->belongsTo('App\Author');
    }

}
