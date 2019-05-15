<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function() {
   return view('welcome');
});

Route::post('/create',[
    'uses'=>'CarController@create',
    'as'=>'cars.create'
]);

Route::post('/edit',[
    'uses'=>'CarController@edit',
    'as'=>'cars.edit'
]);

Route::post('/delete',[
    'uses'=>'DeleteController@delete',
    'as'=>'cars.delete'
]);


Auth::routes();
Route::get('/home','HomeController@index')->name('home');