<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPrjcs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_prjcs', function($table){
         $table->increments('prjcsIdent')->unique();
         $table->string('prjcsNames');
         $table->tinyInteger('prjcsInsta');
         $table->string('prjcsYears',4);
         $table->string('prjcsUsrid',50);
	 $table->string('prjcsUsrdt',50);
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
		Schema::drop('t_prjcs');
	}

}
