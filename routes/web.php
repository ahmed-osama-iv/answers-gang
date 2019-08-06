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




Route::get('/All','QuestionController@index');
Route::get('/qa',function (){
   return view('ShowAndA');
});
Route::post('/store','QuestionController@store');

Route::post('/store_','AnswerController@store');

Route::get('/show/{id}','QuestionController@show');

Route::get('/qp' , function (){
    return view('QuestionPage');
});







Route::get('/show','ControllerUser@index');

Route::get('/edit/{id}' , 'ControllerUser@edit');




Route::post('/create','ControllerUser@create');

Route::post('/update','ControllerUser@update');

Route::get('/delete/{id}','ControllerUser@delete');


Route::get('/index1','ControllerUser@index1');

Route::get('/create_',function(){
   return view('create');
});


