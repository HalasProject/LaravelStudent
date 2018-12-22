<?php
/*
|--------------------------------------------------------------------------
| StudNote v1
|--------------------------------------------------------------------------
| Contact me for anything that concerns the project ! :)
| Creator : Salah Eddine Bentayeb
| GitHub  : https://github.com/HalasProject/
| Facebook: https://www.facebook.com/BentayebSalah
| Twitter : https://twitter.com/halasdior
| LinkedIn: https://www.linkedin.com/in/salahbentayeb/
| 
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



Route::get('prof','ProfController@index');

Route::get('fiche/show/{id}','NoteController@show');

Route::get('fiche','NoteController@index');
Route::post('fiche','NoteController@store')->middleware('auth');
Route::delete('fiche/{id}','NoteController@delete')->middleware('auth');

Route::get('fiche/create','NoteController@create')->middleware('auth');

Route::get('fiche/{id}/edit','NoteController@edit')->middleware('auth');
Route::put('fiche/{id}','NoteController@update')->middleware('auth');

Route::get('fiche/search','NoteController@search');

Route::get('mail', 'MessageController@send');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('contact','MessageController@index');
Route::delete('contact/{id}','MessageController@delete');
Route::get('contact/MessageDetaille/{id}','MessageController@show');
Route::post('contact','MessageController@store');




?>