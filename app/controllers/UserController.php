<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	return View::make('pages.home');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function register()
	{
		return View::make('pages.register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
$user = new User();


$user->email     = Input::get('email');
$user->password  = Hash::make(Input::get('password'));
$tkrywss = DB::table('t_kryws')->get();

foreach ($tkrywss as $tkryws)
{
    var_dump($tkryws->krywsNkywn);
}


$rules = array(
	'krywsNkywn' => 'required',
	'email' => "required|unique:users,email",
	'password' => 'required',

	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}

$user->save();

return Redirect::to('register')->with('pesan', 'Registrasi berhasil!');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function login(){
	
	return View::make('pages.home');

}

    public function authenticate(){

if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
{
   return Redirect::to('dashboard');
}

  return Redirect::to('login')->with('pesan_error', 'Login gagal, email atau password salah!');
	
}

   public function logout(){
   Auth::logout();
   return Redirect::to('login')->with('pesan', 'berhasil logout');
}

	
}