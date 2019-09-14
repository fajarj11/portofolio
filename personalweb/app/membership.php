<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'membership';

    public function membership(){
        return $this->belongsTo('App\membership');
    }
}
