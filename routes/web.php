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

// login
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Home :: New Add
Route::get('card_new_add', 'cardcontroller@index')->name('card_new_add');

// card_new_add :: form
Route::post('/data_add', 'cardcontroller@store')->name('data_add');

// card_list
Route::get('/home', 'cardcontroller@view')->name('home');

 // Delete
Route::get('delete_card/{id}', 'cardcontroller@delete_card');


// edit_card
Route::get('edit_card/{id}', 'cardcontroller@edit_card');


// dbplus_update(relation, old, new)
Route::post('update_add/{id}', 'cardcontroller@update_add');


 