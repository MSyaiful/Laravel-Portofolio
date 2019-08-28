<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public function artikel(){
        return $this->belongsTo('App\Artikel','id_com');
    }
}
