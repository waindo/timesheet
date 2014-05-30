<?php

class TShedsController extends BaseController {
public function store(){

    $tsheds = new TSheds;


    $tsheds->shedsTnggl = Input::get('shedsTnggl');;
    $tsheds->shedsKgtan = Input::get('shedsKgtan');;

    $tsheds->save();

  }
 }

?>