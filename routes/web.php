<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/login','LoginController@getLogin');
Route::get('/dashboard','DashboardController@getDashboard');
Route::post('/login','LoginController@postLogin');


