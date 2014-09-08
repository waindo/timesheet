<?php

class TCodesController extends BaseController {
public function store(){
$rules = array(
	'codesHeads' => 'required',
	'codesCodes' => 'required',
	'codesDesc1' => 'required',
	'codesDesc2' => 'required',
	'codesStats' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}

    $tcodes = new TCodes;


    $tcodes->codesHeads = Input::get('codesHeads');;
    $tcodes->codesCodes = Input::get('codesCodes');;
	$tcodes->codesDesc1 = Input::get('codesDesc1');;
	$tcodes->codesDesc2 = Input::get('codesDesc2');;
	$tcodes->codesStats = Input::get('codesStats');;
 
    $tcodes->save();
	return Redirect::to('codeslist');
	
	}
	
	  public function edit($id)
{
   $tcodes = TCodes::find($id);
   return View::make('pages.editcodes')->with('tcodes', $tcodes);
}
public function confirm($id)
{
   $tcodes= TCodes::find($id);
   return View::make('pages.confirmcodes')->with('tcodes', $tcodes);
}

 public function update()
 {
 $rules = array(
	'codesHeads' => 'required',
	'codesCodes' => 'required',
	'codesDesc1' => 'required',
	'codesDesc2' => 'required',
	'codesStats' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}
 
     $id   = Input::get('id');
     $tcodes = TCodes::find($id);

    $tcodes->codesHeads = Input::get('codesHeads');;
    $tcodes->codesCodes = Input::get('codesCodes');;
	$tcodes->codesDesc1 = Input::get('codesDesc1');;
	$tcodes->codesDesc2 = Input::get('codesDesc2');;
	$tcodes->codesStats = Input::get('codesStats');;

     $tcodes->save();
	 return Redirect::to('codeslist');
 }
 
     public function delete($id)
    {
      $tcodes = TCodes::find($id);
      $tcodes->delete();
      return Redirect::to('codeslist');
    }
  
  
 }

?>