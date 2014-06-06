<?php

class TKrywsController extends BaseController {
public function store(){

    $tkryws = new TKryws;


    $tkryws->krywsNkywn = Input::get('krywsNkywn');;
    $tkryws->krywsNames = Input::get('krywsNames');;
	$tkryws->krywsTmlhr = Input::get('krywsTmlhr');;
	$tkryws->krywsTglhr = Input::get('krywsTglhr');;
	$tkryws->krywsJekel = Input::get('krywsJekel');;
	$tkryws->krywsAgama = Input::get('krywsAgama');;
	$tkryws->krywsAlmat = Input::get('krywsAlmat');;
	$tkryws->krywsNomhp = Input::get('krywsNomhp');;
	$tkryws->krywsThnms = Input::get('krywsThnms');;
	$tkryws->krywsDvisi = Input::get('krywsDvisi');;
	$tkryws->krywsJabat = Input::get('krywsJabat');;
	
    $tkryws->save();

  }
 }

?>