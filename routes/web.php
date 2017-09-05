<?php

Route::get('/', function () {
    return view('main');
});

Route::get('/login','LoginController@getLogin');


