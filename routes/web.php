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
    return view('homepage');
});
Route::get('projects', 'ProjectController@index')->name('projects.index');
Route::get('projects/create', 'ProjectController@create')->name('projects.create');
Route::post('projects', 'ProjectController@store')->name('projects.store');
Route::post('projects/show', 'ProjectController@show')->name('projects.show');
Route::POST('projects/edit', 'ProjectController@edit')->name('projects.edit');
Route::patch('projects', 'ProjectController@update')->name('projects.update');
Route::delete('projects', 'ProjectController@destroy')->name('projects.destroy');

