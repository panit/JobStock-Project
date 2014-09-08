<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



   
Route::group(array('before' => 'auth'), function()
{
});
    
// You can use Route::resource togehter with 
// direct routes to the Resource Controller
// so e.g. Route::post('cms', 'PostsController@save');


Route::get('/', array('as' =>'home','uses' => 'HomeController@index'));

