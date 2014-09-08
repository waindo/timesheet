<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSheds extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::create('t_sheds', function($table){
         $table->increments('id');
         $table->integer('shedsSquan');
         $table->string('shedsKgtan',1000);
         $table->string('shedsStats',50);
		 $table->date('shedsTnggl');
         $table->string('shedsUsrid',50);
		  $table->timestamps();
         
		 });
	}
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_sheds');
	}

}
