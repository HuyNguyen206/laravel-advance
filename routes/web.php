<?php

use App\Http\Controllers\MacroController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PipelineController;
use App\Post;
use App\UploadServiceFacade;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('test-http', function () {
    $response = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts', [
        'title' => 'huy',
        'body' => 'hohoho',
        'userId' => 4,
    ]);
    dd($response->offsetGet('id'));
});
Route::get('test', function () {
    $items = [
        'reactjs', 'angular', 'python'
    ];
//    $items = 'kkk';
    return view('test-component', compact('items'));
});
Route::get('macro', [MacroController::class, 'macro']);
Route::get('pipeline-post', [PipelineController::class, 'pipelineFilter']);
Route::get('posts', function () {
    return Post::all();
});
Route::get('upload', function () {
    UploadServiceFacade::upload('12 kb', 'huy', true);
    UploadServiceFacade::uploadFail();
//    UploadServiceFacade::uploadTestNotExist();
});
Route::get('pay', [PayOrderController::class, 'pay']);
Route::get('/', function () {
    return view('welcome');
});
