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

//Route::group(['namespace' => 'form'],function(){

//});

Route::get('list', 'UserController@listUsers')->name('list');
Route::get('list/novo', 'UserController@addUser')->name('novo');
Route::get('list/{user}', 'UserController@listUser')->name('listU');

Route::post('list/store','UserController@store')->name('store');


Route::get('list/editar/{user}','UserController@editUser')->name('editar');
Route::put('list/edit/{user}','UserController@edit')->name('edit');



Route::delete('list/destroy/{user}', 'UserController@destroy')->name('destroy');

