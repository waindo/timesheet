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

Route::get('/', function()
{
	return View::make('pages.home');
});

Route::get('formtimesheet', function()
{
 return View::make('pages.formtimesheet');
});

Route::get('contact', function()
{
	return View::make('pages.contact');
});


Route::post('tshetd/insert', 'TShetdController@store');
