<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //当定义的方法名不是user的时候
    //传入了额外参数，意为posts表中的user_id对应users表中的id
    public function author(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function comments()
    {
        return $this->morphMany('App\Models\Comment','item');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag','taggable');
    }

}
