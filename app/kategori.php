<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    public function blog(){
        return $this->hasMany('App\Blog');
    }
}
