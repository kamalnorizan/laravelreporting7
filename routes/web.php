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

// DB::listen(function ($event) {
//     dump($event->sql);
// });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post.index')->middleware('auth');
Route::post('/post/ajaxLoadPostTable', 'PostController@ajaxLoadPostTableEL')->name('post.ajaxLoadPostTable');
Route::post('/post/store', 'PostController@store')->name('post.store');
Route::get('/post/report/{size}/{perpage}', 'PostController@report')->name('post.report');
Route::post('/post/reportDataTable', 'PostController@reportDataTable')->name('post.reportDataTable');
Route::get('/surat/lesen','PostController@lesen')->name('post.lesen');
