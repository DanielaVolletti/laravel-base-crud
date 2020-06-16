<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'CagnolinoController@index')->name('home');
Route::get('/showCagnolino/{id}', 'CagnolinoController@showCagnolino')->name('showCagnolino');
