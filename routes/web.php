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

Route::get('/groups/show/all', 'GroupController@index');

Route::get('/groups/create', function () {
    return view('group_create');
});

Route::get('/groups/store', 'GroupController@store');

Route::get('/groups/edit/{id}', 'GroupController@edit');

Route::put('/groups/update', 'GroupController@update');

Route::delete('/groups/delete/{id}', 'GroupController@destroy');