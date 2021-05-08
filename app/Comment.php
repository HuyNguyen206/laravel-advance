<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $guarded = [];

    public function commentableCustom(){
        return $this->morphTo('commentableCustom', 'comment_type', 'comment_id');
    }
}
