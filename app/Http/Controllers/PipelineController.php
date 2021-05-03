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
//        $posts =  collect($posts->map(function ($post) {
//            return $post->only(['name', 'active']);
//        }))->paginate(5);
        $posts = $posts->paginate(5);
//        dd(DB::getQueryLog());
        return view('posts', compact('posts'));
//        return $posts->get()->makeVisible(['name', 'active']);
    }
}
