<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTBook extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_book', function($table){
         $table->increments('shedsIdent');
         $table->integer('shedsSquan');
         $table->string('shedsKgrtan',1000);
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
		Schema::drop('t_book');
	}

}
