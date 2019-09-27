<?php

Route::get('/', function () {
    return view('welcome');
});
//Route::view('route_name','view_file_name');
Route::view('viewsession','session');
//ROute for post
Route::POST('sessioncontroller','ForSessionController@submit');

//for flash session1
Route::view('/flash','flash');
Route::POST('/flashpost','FlashController@submit');

//end flash route