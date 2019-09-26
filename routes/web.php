<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('userview','userview');
Route::post('usercontroller','UserController@formsubmit');

