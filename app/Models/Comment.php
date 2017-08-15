<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function item() {
        return $this->morphTo();
    }

    //当不使用item作为方法名，可以传入自定义参数
    public function getItem()
    {
        return $this->morphTo('item', 'item_type', 'item_id');
    }
}
