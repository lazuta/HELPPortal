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

Route::get('/', function () {
return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('/home/update/{id}', 'UserController@update')->name('update')->middleware('auth');
Route::post('/home/updateInf/{id}', 'UserController@updateInf')->name('update.inf')->middleware('auth');

Route::get('/admin', 'AdminComtroller@show')->name('admin')->middleware('admin');
Route::post('/admin/ok/{id}', 'AdminComtroller@ok')->name('admin.ok')->middleware('admin');
Route::post('/admin/no/{id}', 'AdminComtroller@no')->name('admin.no')->middleware('admin');

Route::prefix('help')->group(function() {
    Route::get('/', 'HelpController@index')->name('help.show');
});