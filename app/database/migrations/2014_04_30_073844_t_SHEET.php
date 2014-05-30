<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class tsheet extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_SHEET', function($table){
         $table->tinyInteger('sheetIdent');
         $table->string('sheetPrjct',50);
         $table->string('sheetKrywn',50);
         $table->string('codesUsrid',50);
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_SHEET');
	}

}
