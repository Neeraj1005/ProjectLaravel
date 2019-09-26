<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('userview','userview');
//create route for showing view and post 
Route::post('usercontroller','UserController@formsubmit');

