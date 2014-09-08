<?php

class TPrjcsController extends BaseController {
public function store(){

$rules = array(
	'prjcsNames' => 'required',
	'prjcsInsta' => 'required',
	'prjcsYears' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}

    $tprjcs = new TPrjcs;


    $tprjcs->prjcsNames = Input::get('prjcsNames');;
    $tprjcs->prjcsInsta = Input::get('prjcsInsta');;
	$tprjcs->prjcsYears = Input::get('prjcsYears');;
	
	//$tcodescodes->TCodes::get('codesHeads','codesCodes');

    $tprjcs->save();
	return Redirect::to('prjcslist');

  }
  
  public function edit($id)
{
   $tprjcs = TPrjcs::find($id);
   return View::make('pages.editprjcs')->with('tprjcs', $tprjcs);
}
public function confirm($id)
{
   $tprjcs= TPrjcs::find($id);
   return View::make('pages.confirmprjc')->with('tprjcs', $tprjcs);
}

 public function update()
 {
  $rules = array(
	'prjcsNames' => 'required',
	'prjcsInsta' => 'required',
	'prjcsYears' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}
     $id   = Input::get('id');
     $tprjcs = TPrjcs::find($id);

    $tprjcs->prjcsNames = Input::get('prjcsNames');;
    $tprjcs->prjcsInsta = Input::get('prjcsInsta');;
	$tprjcs->prjcsYears = Input::get('prjcsYears');;

     $tprjcs->save();
	 return Redirect::to('prjcslist');
 }
 
     public function delete($id)
    {
      $tprjcs = TPrjcs::find($id);
      $tprjcs->delete();
      return Redirect::to('prjcslist');
    }
	
	     public function open($id)
    {
      $tprjcs = TPrjcs::find($id);
      return Redirect::to('shedslist');
    }
  
 }

?>