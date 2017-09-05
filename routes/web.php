<?php

Route::get('/', function () {
    return view('welcome');
});\

Route::get('/login','LoginController@getLogin');
Route::post('/login','LoginController@postLogin');


