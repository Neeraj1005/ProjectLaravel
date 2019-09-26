<?php



Route::get('/welcome', function () {
    return view('welcome');
});

/*Route::get('user', function () {
//Route::get('user/{id?}', function ($id='No id is available') {
    //return view('user', ['data'=>$id]);
    return view('user', ['data'=>'peter parker']);
});*/

Route::get('mycontroller/{id}','MyController@index');