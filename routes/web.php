<?php

Route::get('/', function () {
    return view('welcome');
});
//middleware uses
Route::view('userview','userview')->middleware('ageChecker');