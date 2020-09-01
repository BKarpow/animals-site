<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'role:admin'], function() {
    Route::get('/admin', 'AdminAnimalsController@index');
    Route::get('/admin/animal-edit/{id}', 'AdminAnimalsController@edit');
    Route::post('/admin/animal-edit-execute/{id}', 'AdminAnimalsController@update');
});



Route::get('/{animal_id}', 'AnimalsController@showAnimalsFromId');
