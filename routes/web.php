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

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/form', 'manmentController@index');
Route::get('/show', 'manmentController@show');
Route::get('/update/{id}/edit', 'manmentController@edit');
Route::post('/update/{id}/Update', 'manmentController@update');
Route::get('/delete/{id}/delete', 'manmentController@delete');

Route::get('/workmgts', 'manmentController@showform2');
Route::post('/form2', 'manmentController@stored');
Route::get('/viewshow', 'manmentController@viewshow');
Route::get('/updated/{id}/editworkmgts', 'manmentController@editworkmgts');
Route::post('/updated/{id}/Updated', 'manmentController@updated');
Route::get('/deleted/{id}/deleted', 'manmentController@deleted');
