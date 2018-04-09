<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->middleware('auth')->name('help');
Route::get('/cebian', 'StaticPagesController@cebian')->name('cebian');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('/users', 'UsersController');

Route::get('/login', 'SessionsController@create')->name('login')->middleware('web');;
Route::post('/login', 'SessionsController@store')->name('login')->middleware('web');;
Route::delete('/logout', 'SessionsController@destroy')->name('logout');


Route::get('/daohang', function(){return view('module/daohang');})->name('daohang');
Route::get('/frame1', function(){return view('module/frame1');})->name('frame1');