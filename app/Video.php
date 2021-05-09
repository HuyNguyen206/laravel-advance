<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    public function comments(){
        return $this->morphMany(Comment::class, 'commentableCustom', 'comment_type', 'comment_id');
    }

    public function tags(){
        return $this->morphToMany(Tag::class,'taggable_custom_hi', 'taggables_custom');
    }
}
