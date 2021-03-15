<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BlogController;

use App\Models\Post;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('project');
});

Route::get('/blogger', function (){
    return view('blogger');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/post/create', function (){
    DB::table('posts')->insert([
        'title'=> 'Marte Stanislav',
        'body'=> 'Its body'
    ]);
});

Route::get('/post', function (){
    $post = Post::find(1);
    return $post;
});

Route::get('blog/index', [BlogController::class, 'index']);
Route::get('blog/create', function( ){
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-blog');

Route::get('post/{id}', [BlogController::class, 'get_post']);