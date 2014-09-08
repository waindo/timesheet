<?php

class TShedsController extends BaseController {
public function store(){

$rules = array(
	'shedsTnggl' => 'required',
	'shedsKgtan' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}

    $tsheds = new TSheds;


    $tsheds->shedsTnggl = Input::get('shedsTnggl');;
    $tsheds->shedsKgtan = Input::get('shedsKgtan');;

    $tsheds->save();
	return Redirect::to('shedslist');

  }
  
public function edit($id)
{
   $tsheds = TSheds::find($id);
   return View::make('pages.editsheds')->with('tsheds', $tsheds);
}

public function confirm($id)
{
   $tsheds = Tsheds::find($id);
   return View::make('pages.confirm')->with('tsheds', $tsheds);
}

 public function update()
 {
 $rules = array(
	'shedsTnggl' => 'required',
	'shedsKgtan' => 'required'
	);
	
	$validation = Validator::make(Input::all(), $rules);
	if($validation->fails()){
	return Redirect::back()->withInput()->withErrors($validation->messages());
	}
 
     $id   = Input::get('id');
     $tsheds = TSheds::find($id);

     $tsheds->shedsTnggl       = Input::get('shedsTnggl');
     $tsheds->shedsKgtan      = Input::get('shedsKgtan');

     $tsheds->save();
	 return Redirect::to('shedslist');
 }
 
     public function delete($id)
    {
      $tsheds = TSheds::find($id);
      $tsheds->delete();
      return Redirect::to('shedslist');
    }

 }

?>