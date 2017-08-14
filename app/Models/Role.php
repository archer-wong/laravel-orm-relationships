<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //多对多关系
    public function getUsers(){
        return $this->belongsToMany('App\Models\User');
    }
}

