<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //定义与UserAccount的一对一关系
    public function account(){
        return $this->hasOne('App\Models\UserAccount');
    }

    //定义与Post的一对多关系
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }
}
