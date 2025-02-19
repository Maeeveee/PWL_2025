<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hellow world');
});

Route::get('/world', function () {
    return ('World');
});

Route::get('/users/{name}', function ($name) {
    return 'Nama saya : ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId,$commentId){
    return 'Pos ke-'. $postId. " komentar ke-".$commentId;
});

Route::get('/user/{name?}', function ($name = null){
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name = "john"){
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function (){
    //
})->name('profile');

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id?}', [PageController::class, 'articles']);

Route::resource('photos', PhotoController::class);

route::resource('photos', PhotoController::class)->only(['index','show']);
route::resource('photos', PhotoController::class)->except(['create','store','update','destroy']);

Route::get('/greeting',function(){
    return view('blog.hello',['name'=>'Andi']);
});

Route::get('/greeting',[WelcomeController::class,'greeting']);