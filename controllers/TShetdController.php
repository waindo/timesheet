<?php

class TShetdController extends BaseController {
public function store(){

    $tshetd = new TShetd;


    $tshetd->shetdTnggl = Input::get('shetdTnggl');;
    $tshetd->shetdKgtan = Input::get('shetdKgtan');;

    $tshetd->save();

  }
 }

?>