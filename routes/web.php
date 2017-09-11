<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/buku/tambah-buku', 'MenuController@index');

Route::post('/buku/store', 'MenuController@store');

Route::get('/', 'MenuController@getBuku');