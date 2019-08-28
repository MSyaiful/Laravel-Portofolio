<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jnsmember extends Model
{
    protected $table = 'jnsmember';
    public function jnsmember(){
        return $this->hasMany('App\Jnsmember');
    }
}
