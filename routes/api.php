<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


    Route::post('login', 'BaseController@login');
    Route::post('inscription', 'BaseController@inscription');

    Route::patch('update', 'BaseController@update');
    Route::post('logout', 'BaseController@logout');
    Route::post('refresh', 'BaseController@refresh');
    
});

Route::group(['middleware' => ['jwt.auth']], function () {
   
    //ay 7aja b jwt testa3lha 5ouya abdelssalem
    
});


Route::post('ajoutOffre', 'OffreController@ajoutOffre');
Route::get('showAllOffre', 'OffreController@showAllOffre');
Route::get('showOffre/{id}', 'OffreController@showOffre');
Route::post('updateOffre/{id}', 'OffreController@updateOffre');
Route::delete('DeleteOffre/{id}', 'OffreController@DeleteOffre');




