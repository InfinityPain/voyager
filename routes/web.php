<?php

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


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

route::get('/posts', function () {

})->name('posts.index');

Route::get('/posts/{post}', function (){

})->name('posts.show');

route::get('/about',function(){

})->name('about');

route::get('/polity',function(){

})->name('polity');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
