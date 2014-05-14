<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TShedsLOGGS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_Sheds_LOGGS', function($table){
		 $table->string('shedsParam',1);
         $table->increments('shedsIdent');
         $table->integer('shedsSquan');
         $table->string('shedsKgtan',1000);
         $table->string('shedsStatsn',50);
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
		Schema::drop('t_Sheds_LOGGS');
	}

}