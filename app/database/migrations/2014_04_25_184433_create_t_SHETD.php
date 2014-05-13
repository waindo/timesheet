<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSHETD extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_SHETD', function($table){
         $table->increments('shetdIdent');
         $table->integer('shetdSquan');
         $table->string('shetdKgtan',1000);
         $table->string('shetdStatsn',50);
         $table->string('shetdUsrid',50);
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
		Schema::drop('t_SHETD');
	}

}
