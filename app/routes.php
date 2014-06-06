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

Route::any('formtimesheet', function()
{
 return View::make('pages.formtimesheet');
});

Route::any('formproject', function()
{
 return View::make('pages.formproject');
});

Route::any('formkaryawan', function()
{
 return View::make('pages.formkaryawan');
});

Route::any('contact', function()
{
	return View::make('pages.contact');
});

Route::any('Shedslist', function(){
	$Tsheds = Tsheds::all();
	return View::make('pages.listt_shed')->with('tshedsdata', $Tsheds);
});

Route::any('Prjcslist', function(){
	$Tprjcs = Tprjcs::all();
	return View::make('pages.listt_prjc')->with('tprjcsdata', $Tprjcs);
});

Route::any('Krywslist', function(){
	$Tkryws = Tkryws::all();
	return View::make('pages.listt_kryw')->with('tkrywsdata', $Tkryws);
});


Route::post('tsheds/insert', 'TShedsController@store');
Route::post('tprjcs/insert', 'TPrjcsController@store');
Route::post('tkryws/insert', 'TKrywsController@store');

Route::get('tprjcs/edit/{prjcsIdent}', 'TPrjcsController@edit');

Route::post('tprjcs/update', 'TPrjcsController@update');
