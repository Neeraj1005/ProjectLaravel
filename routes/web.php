<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('mycontroller','MyController@index');

//simple calling the view
Route::view('myroute','users');


/* simple controller route with pass id
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('mycontroller/{id}','MyController@index');
*/

/*simple route pass data
Route::get('user', function () {
//Route::get('user/{id?}', function ($id='No id is available') {
    //return view('user', ['data'=>$id]);
    return view('user', ['data'=>'peter parker']);
});*/

