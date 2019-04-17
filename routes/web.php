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
Route::get('/note/create', 'NoteController@create')->middleware('auth');
Route::post('/note/create', 'NoteController@store')->middleware('auth');
Route::get('/note/{note}', 'NoteController@show');
Route::get('/note/{note}/edit', 'NoteController@edit')->middleware('auth');
Route::patch('note/{note}', 'NoteController@update')->middleware('auth');
Route::delete('note/{note}', 'NoteController@destroy')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');