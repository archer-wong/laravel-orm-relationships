<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function comments()
    {
        return $this->morphMany('App\Models\Comment','item');
    }

    public function tags()
    {
        return $this->morphToMany('App\Models\Tag','taggable');
    }

}
