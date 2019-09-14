<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    protected $table = 'komentar';

    public function blog(){
        return $this->belongsTo('App\Blog', 'id_kom');
    }
}
