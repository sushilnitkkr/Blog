<?php

/*

| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//change here code to route the request.
Route::get('/','TasksController@index');
Auth::routes();
Route::get('/task','TasksController@add');
Route::post('/task','TasksController@create');
Route::get('/task/{task}','TasksController@edit');
Route::post('/task/{task}','TasksController@update');
Route::delete('/task{task}','TasksController@destroy');
Route::get('/wel', 'TasksController@wel')->middleware('is_admin')->name('admin');
