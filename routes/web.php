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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/about', function() {
    return view('about');
});

Route::get('/note', function() {
    return redirect('/');
});

Route::get('/', 'NoteController@index');
Route::get('/note/create', 'NoteController@create');
Route::post('/note/create', 'NoteController@store');
Route::get('/note/{note}', 'NoteController@show');
Route::get('/note/{note}/edit', 'NoteController@edit');
Route::patch('note/{note}', 'NoteController@update');
Route::delete('note/{note}', 'NoteController@destroy');