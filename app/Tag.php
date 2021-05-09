<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    //
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable_custom_hi', 'taggables_custom');
    }
    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable_custom_hi', 'taggables_custom');
    }
}
