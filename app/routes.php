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

<<<<<<< HEAD


Route::get('formtimesheet', function()
{
 return View::make('pages.formtimesheet');
});

Route::get('formproject', function()
{
 return View::make('pages.formproject');
});

Route::get('formkaryawan', function()
{
 return View::make('pages.formkaryawan');
});

Route::get('contact', function()
{
	return View::make('pages.contact');
});

Route::get('formcodes', function()
{
	return View::make('pages.formcodes');
});

Route::get('shedslist', function(){

   $tsheds = TSheds::all();
   return View::make('pages.listsheds')->with('shedsdata', $tsheds);

});

Route::get('prjcslist', function(){

   $tprjcs = TPrjcs::all();
   return View::make('pages.listprjcs')->with('prjcsdata', $tprjcs);

});

Route::get('prjcssheds', function(){

   $tprjcs = TPrjcs::all();
   return View::make('pages.listshedsprjcs')->with('prjcsdata', $tprjcs);

});

Route::get('krywslist', function(){

   $tkryws = TKryws::all();
   return View::make('pages.listkryws')->with('krywsdata', $tkryws);

});


Route::get('codeslist', function(){

   $tcodes = TCodes::all();
   return View::make('pages.listcodes')->with('codesdata', $tcodes);

});

Route::get('login', 'UserController@login');
Route::get('/', 'UserController@index');
Route::post('authenticate', 'UserController@authenticate');

Route::get('dashboard', 'DashboardController@index');

Route::group(array('before'=>'authenticate'),function(){
Route::get('/', 'UserController@index'); 
Route::get('login', 'UserController@login');
});








Route::get('register', 'UserController@register'); 
Route::post('store', 'UserController@store');

Route::get('logout', 'UserController@logout');

Route::get('user/email', array('as' => 'rubah_username', 'uses' => 'UserController@getRubahUsername'));
Route::post('user/email', array('uses' => 'UserController@postRubahUsername'));

Route::get('user/password', array('as' => 'rubah_password', 'uses' => 'UserController@getRubahPassword'));
Route::post('user/password', array('uses' => 'UserController@postRubahPassword'));

Route::post('tcodes/insert', 'TCodesController@store');
Route::get('tcodes/edit/{id}', 'TCodesController@edit');
Route::post('tcodes/update', 'TCodesController@update');
Route::get('tcodes/delete/{id}', 'TCodesController@delete');

Route::post('tprjcs/insert', 'TPrjcsController@store');
Route::get('tprjcs/edit/{id}', 'TPrjcsController@edit');
Route::post('tprjcs/update', 'TPrjcsController@update');
Route::get('tprjcs/delete/{id}', 'TPrjcsController@delete');
Route::get('tprjcs/open/{id}', 'TPrjcsController@open');


Route::post('tsheds/insert', 'TShedsController@store');
Route::get('tsheds/edit/{id}', 'TShedsController@edit');
Route::post('tsheds/update', 'TShedsController@update');
Route::get('tsheds/delete/{id}', 'TShedsController@delete');

Route::post('tkryws/insert', 'TKrywsController@store');
Route::get('tkryws/edit/{id}', 'TKrywsController@edit');
Route::post('tkryws/update', 'TKrywsController@update');
Route::get('tkryws/delete/{id}', 'TKrywsController@delete');

Route::get('tsheds/confirm/{id}', 'TShedsController@confirm');
Route::get('tkryws/confirm/{id}', 'TKrywsController@confirm');
Route::get('tprjcs/confirm/{id}', 'TPrjcsController@confirm');
Route::get('tcodes/confirm/{id}', 'TCodesController@confirm');

App::missing(function($exception)
{
return Response::view('Error404', array(), 404);
});


=======
Route::get('/', function()
{
	return View::make('hello');
});
>>>>>>> c742c5d59814f58a71be789c21c15cbbb3ca2887
