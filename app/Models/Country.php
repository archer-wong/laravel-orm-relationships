<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function getPostsThroughUser(){
        return $this->hasManyThrough('App\Models\Post','App\Models\User');
    }
}
