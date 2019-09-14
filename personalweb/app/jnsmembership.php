<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jnsmembership extends Model
{
    protected $table = 'jnsmembership';

    public function jnsmembership(){
        return $this->hasMany('App\jnsmembership');
    }
}
