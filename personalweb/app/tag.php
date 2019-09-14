<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $table = 'tag';

    public function blog(){
        return $this->belongsToMany('App\Blog');
    }
}
