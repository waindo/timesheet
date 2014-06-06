<?php

class TPrjcsController extends BaseController {
public function store(){

    $tprjcs = new Tprjcs;


    $tprjcs->prjcsNames = Input::get('prjcsNames');;
    $tprjcs->prjcsInsta = Input::get('prjcsInsta');;
	$tprjcs->prjcsYears = Input::get('prjcsYears');;

    $tprjcs->save();

  }
  public function edit($prjcsIdent)
{
   $tprjcs = Tprjcs::find($prjcsIdent);
   return View::make('edittprjcs')->with('tprjcs', $tprjcs);
}

 public function update()
 {
     $prjcsIdent   = Input::get('prjcsIdent');
     $tprjcs = Tprjcs::find($prjcsIdent);

      $tprjcs->prjcsNames = Input::get('prjcsNames');;
    $tprjcs->prjcsInsta = Input::get('prjcsInsta');;
	$tprjcs->prjcsYears = Input::get('prjcsYears');;

     $book->save();
 }
 }

?>