<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\FormValidation;
use App\Http\Controllers\LoginController;

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
})->middleware('protected');
Route::view('/noaccess', 'noaccess');

//controllers
Route::get('/fluent-string',[FluentController::class,'index'])->name("fluent.index");
Route::get('/form',[FormValidation::class,'index'])->name('form.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

//middleware
Route::middleware(['auth', 'protected'])->group(function () {
    Route::view('/', 'welcome');
});

Route::group(['middleware'=> ['protected']],function(){
    Route::view('/', 'welcome');
});