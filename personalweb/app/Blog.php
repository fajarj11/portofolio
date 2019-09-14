<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function blog(){
        return $this->belongsTo('App\blog');
    }

    public function tags()
    {
        return $this->belongsToMany('App\tag');
    }

}
