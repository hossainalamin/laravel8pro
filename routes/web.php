<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SessionCotroller;
use App\Http\Controllers\UploadController;

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

Route::get('/{locale}', function ($locale) {
    App::setLocale("$locale");
    return view('welcome');
})->middleware('protected');
Route::view('/noaccess', 'noaccess');
Route::view('/home','index');
Route::view('/about','about');
Route::view('/contact','contact');

//controllers
Route::get('/fluent-string',[FluentController::class,'index'])->name("fluent.index");
Route::get('/form',[FormValidation::class,'index'])->name('form.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');
Route::get('/session-get',[SessionCotroller::class,'getSession'])->name('session.get');
Route::get('/session-set',[SessionCotroller::class,'setSession'])->name('session.set');
Route::get('/session-remove',[SessionCotroller::class,'deleteSession'])->name('session.delete');
Route::get('/posts',[PostController::class,'getAllPost'])->name('post.get');
Route::get('/addpost',[PostController::class,'addPost'])->name('post.add');
Route::post('/postsubmit',[PostController::class,'postSubmit'])->name('post.submit');
Route::get('/post/{id}',[PostController::class,'getPostById'])->name('post.single');
Route::get('delete/{id}',[PostController::class,'delPostById'])->name('post.delete')->where('id','[0-9]+');
Route::get('edit/{id}',[PostController::class,'editPostById'])->name('post.delete')->where('id','[0-9]+');
Route::post('/edit-post',[PostController::class,'updatePost'])->name('post.update');
Route::get('/inner-join',[PostController::class,'innerJoin'])->name('inner.get');
Route::get('/left-join',[PostController::class,'leftJoin'])->name('left.join');
Route::get('/right-join',[PostController::class,'rightJoin'])->name('right.join');
Route::get('/model-post',[PostController::class,'getPostFromModel'])->name('model.post');
Route::get('/upload',[UploadController::class,'index'])->name('upload.index');
Route::post('/upload',[UploadController::class,'uploadSubmit'])->name('upload.submit');
//middleware
Route::group(['middleware'=> ['protected']],function(){
    Route::view('/', 'welcome');
});