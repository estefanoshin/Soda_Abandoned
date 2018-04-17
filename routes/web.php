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

Route::get('/', 'HomeController@index');

Route::get('/', 'ProductController@index');

Route::get('/storage/app/public/{filename}', ['uses' => 'ProductController@retrieve_file', 'as' => 'image']);

Route::get('/formProduct', 'ProductController@create')->name('products');

Route::post('/formProduct', 'ProductController@store');

Route::get('/destroy/{destroy_id}', ['as'=> 'destroy', 'uses'=>'ProductController@destroy']);

Route::get('/edit/{edit_id}', ['as'=> 'edit', 'uses'=>'ProductController@edit']);

Route::post('/edit', 'ProductController@update')->name('update');

Route::post('/home', 'ProductController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/info', 'InfoController@index')->name('info');