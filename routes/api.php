<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/product','ProductController@index');
Route::post('/product','ProductController@store');
Route::get('/product/{id}','ProductController@store');
Route::put('/product/{id}','ProductController@update');
Route::delete('/product/{id}','ProductController@destroy');

