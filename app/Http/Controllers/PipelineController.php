<?php

namespace App\Http\Controllers;

use App\Post;
use App\QueryFillter\Active;
use App\QueryFillter\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\DB;

class PipelineController extends Controller
{
    //
    public function pipelineFilter(){
        $posts = app(Pipeline::class)
            ->send(Post::query())
            ->through([
                Active::class,
                Sort::class
            ])
            ->thenReturn();
//        DB::enableQueryLog();
        $posts =  $posts->get()->map(function ($post) {
            return $post->only(['name', 'active']);
        });
//        dd(DB::getQueryLog());
        return $posts;
//        return $posts->get()->makeVisible(['name', 'active']);
    }
}
