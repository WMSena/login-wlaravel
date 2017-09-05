<?php

Route::get('/', function () {
    return view('welcome');
});\

Route::get('/login','LoginController@getLogin');
Route::get('/dashboard','DashboardController@getDashboard');
Route::post('/login','LoginController@postLogin');


