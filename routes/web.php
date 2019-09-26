<?php

Route::get('/', function () {
    return view('welcome');
});
//Route::view('route_name','view_file_name');
Route::view('viewsession','session');
//ROute for post
Route::POST('sessioncontroller','ForSessionController@submit');