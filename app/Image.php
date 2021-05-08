<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $guarded = [];

    public function comments(){
        return $this->morphMany(Comment::class, 'commentableCustom', 'comment_type', 'comment_id');
    }
}
