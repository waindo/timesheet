<?php

class TPrjcsController extends BaseController {
public function store(){

    $tprjcs = new TPrjcs;


    $tprjcs->prjcsNames = Input::get('prjcsNames');;
    $tprjcs->prjcsInsta = Input::get('prjcsInsta');;
	$tprjcs->prjcsYears = Input::get('prjcsYears');;

    $tprjcs->save();

  }
 }

?>