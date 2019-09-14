<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table = 'gallery';

    public function gallery(){
        return $this->hasMany('App\gallery');
    }
}
