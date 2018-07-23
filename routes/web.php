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

Route::get('/',['uses'=>'MainController@index','as'=>'home']);
Route::get('/click',['uses'=>'ClickController@index']);
Route::get('/success/{id_click}',['uses'=>'SuccessController@index']);
Route::get('/error/{id_click}',['uses'=>'ErrorController@index']);
Route::get('/domain',['uses'=>'DomainController@index', 'as' => 'domain']);
Route::get('/domain/add',['uses'=>'DomainController@add']);
