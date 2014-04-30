<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPRJCT extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_PRJCT', function($table){
         $table->increments('prjctIdent')->unique();
         $table->string('prjctNames');
         $table->tinyInteger('prjctInsta');
         $table->string('prjctYears',4);
         $table->string('prjctUsrid',50);
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
		Schema::drop('t_PRJCT');
	}

}
