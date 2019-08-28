<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    public function artikel(){
        return $this->belongsTo('App\artikel');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}
