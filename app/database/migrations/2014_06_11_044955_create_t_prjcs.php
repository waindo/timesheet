<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTPrjcs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_PRJCS', function($table){
         $table->increments('id');
         $table->string('prjcsNames',100);
         $table->tinyInteger('prjcsInsta');
         $table->string('prjcsYears',4);
         $table->string('prjcsUsrid',50);
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
		Schema::drop('t_PRJCS');
	}

}

