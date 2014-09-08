<?php

class TKrywsController extends BaseController {
public function store(){

	$rules = array(
	'krywsNkywn' => "required|unique:t_kryws,krywsNkywn",
	'krywsNames' => 'required',
	'krywsTmlhr' => 'required',
	'krywsTglhr' => 'required',
	'krywsJnskl' => 'required',
	'krywsAgama' => 'required',
	'krywsAlmat' => 'required',
	'krywsNomhp' => 'required',
	'krywsThnms' => 'required',
	'krywsDvisi' => 'required',
	'krywsJabat' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}

    $tkryws = new TKryws;


    $tkryws->krywsNkywn = Input::get('krywsNkywn');;
    $tkryws->krywsNames = Input::get('krywsNames');;
	$tkryws->krywsTmlhr = Input::get('krywsTmlhr');;
	$tkryws->krywsTglhr = Input::get('krywsTglhr');;
	$tkryws->krywsJnskl = Input::get('krywsJnskl');;
	$tkryws->krywsAgama  = Input::get('krywsAgama');;
	$tkryws->krywsAlmat = Input::get('krywsAlmat');;
	$tkryws->krywsNomhp = Input::get('krywsNomhp');;
	$tkryws->krywsThnms = Input::get('krywsThnms');;
	$tkryws->krywsDvisi = Input::get('krywsDvisi');;
	$tkryws->krywsJabat = Input::get('krywsJabat');;

	
    $tkryws->save();
	return Redirect::to('krywslist');

  }
  
  public function edit($id)
{
   $tkryws = TKryws::find($id);
   return View::make('pages.editkryws')->with('tkryws', $tkryws);
}
public function confirm($id)
{
   $tkryws = TKryws::find($id);
   return View::make('pages.confirmkrywn')->with('tkryws', $tkryws);
}
 public function update()
 {
 
  $rules = array(
	'krywsNkywn' => 'required',
	'krywsNames' => 'required',
	'krywsTmlhr' => 'required',
	'krywsTglhr' => 'required',
	'krywsJnskl' => 'required',
	'krywsAgama' => 'required',
	'krywsAlmat' => 'required',
	'krywsNomhp' => 'required',
	'krywsThnms' => 'required',
	'krywsDvisi' => 'required',
	'krywsJabat' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}
 
     $id   = Input::get('id');
     $tkryws = TKryws::find($id);

    $tkryws->krywsNkywn = Input::get('krywsNkywn');;
    $tkryws->krywsNames = Input::get('krywsNames');;
	$tkryws->krywsTmlhr = Input::get('krywsTmlhr');;
	$tkryws->krywsTglhr = Input::get('krywsTglhr');;
	$tkryws->krywsJnskl = Input::get('krywsJnskl');;
	$tkryws->krywsAgama = Input::get('krywsAgama');;
	$tkryws->krywsAlmat = Input::get('krywsAlmat');;
	$tkryws->krywsNomhp = Input::get('krywsNomhp');;
	$tkryws->krywsThnms = Input::get('krywsThnms');;
	$tkryws->krywsDvisi = Input::get('krywsDvisi');;
	$tkryws->krywsJabat = Input::get('krywsJabat');;

     $tkryws->save();
	 return Redirect::to('krywslist');
 }
 
     public function delete($id)
    {
      $tkryws = TKryws::find($id);
      $tkryws->delete();
      return Redirect::to('krywslist');
    }

  
 }

?>