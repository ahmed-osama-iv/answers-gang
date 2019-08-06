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

/*
            Groups --- By Ahmed Osama
*/
Route::get('/groups/show', 'GroupController@index');

Route::get('/groups/create', function () {
    return view('group_create');
});

Route::get('/groups/store', 'GroupController@store');

Route::get('/groups/edit/{id}', 'GroupController@edit');

Route::put('/groups/update/{id}', 'GroupController@update');

Route::delete('/groups/delete/{id}', 'GroupController@destroy');



/*
            Questions and Answers --- by Anwar
*/
Route::get('/questions/create' , function (){
    return view('QuestionPage');
});

Route::get('/questions/show/{id}','QuestionController@show');

Route::get('/questions/show','QuestionController@index');
Route::get('/answers/show','AnswerController@index');

Route::get('/questions/edit/{id}','QuestionController@edit');
Route::get('/answers/edit/{id}','AnswerController@edit');

Route::put('/questions/update/{id}','QuestionController@update');
Route::put('/answers/update/{id}','AnswerController@update');

Route::get('/querstions/delete/{id}','QuestionController@destroy');
Route::get('/answers/delete/{id}','AnswerController@destroy');

Route::post('/querstions/store/','QuestionController@store');
Route::post('/answers/store/','AnswerController@store');




//------------------------------------------------------------


/* 
            User --- Default
*/
Route::get('/show','ControllerUser@index');

Route::get('/edit/{id}' , 'ControllerUser@edit');

Route::post('/create','ControllerUser@create');

Route::post('/update','ControllerUser@update');

Route::get('/delete/{id}','ControllerUser@delete');

Route::get('/index1','ControllerUser@index1');
Route::get('/create_',function(){
   return view('create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
