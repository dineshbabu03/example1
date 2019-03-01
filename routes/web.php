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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/project', 'ProjectsController@index');
Route::get('/project/create', 'ProjectsController@create');
Route::post('/project', 'ProjectsController@store');
Route::get('/project/{id}/edit', 'ProjectsController@edit');
Route::post('/project/update/{id}', 'ProjectsController@update');
Route::post('/project/delete/{id}', 'ProjectsController@destroy');
Route::get('/project/{id}', 'ProjectsController@show');

Route::patch('/task/{task}', 'ProjectTasksController@update');
Route::post('/project/{project}/task', 'ProjectTasksController@store');


