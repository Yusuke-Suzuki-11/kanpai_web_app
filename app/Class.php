<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    public function user()
    {
        return $this->belongsToMany('App\User');
    }
}
