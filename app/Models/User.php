<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //定义与UserAccount的一对一关系
    public function getAccount(){
        return $this->hasOne('App\Models\UserAccount');
    }

    //定义与Post的一对多关系
    public function getPosts(){
        return $this->hasMany('App\Models\Post');
    }

    //定义与Role的多对多关系
    public function getRoles(){
        return $this->belongsToMany('App\Models\Role');
    }

}
