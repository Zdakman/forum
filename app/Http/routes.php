<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('welcome');
});

   
Route::group(['middleware' => ['auth']], function () {
   

    Route::get('index', function(){
    return View('pages.acceuil'); 
    });
    
    Route::get('section4', function(){
    return View('includes.section4'); 
    });
    
    Route::get('section2', function(){
    return View('includes.section2'); 
    });
    
    Route::get('section3', function(){
    return View('includes.section3'); 
    });


}); 





