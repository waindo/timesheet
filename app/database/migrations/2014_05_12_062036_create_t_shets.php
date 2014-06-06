<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTShets extends Migration {


	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_SHETS', function($table){
         $table->tinyInteger('shetsIdent');
         $table->string('shetsPrjct',50);
         $table->string('staffEmail',50);
         $table->string('shetsUsrid',50);
      });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_SHETS');
	}

}
