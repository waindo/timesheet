<?php
class DashboardController extends BaseController
{ 
    public function index(){
       return View::make('pages.dashboard');
    } 
}
?>