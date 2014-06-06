<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TShetsLOGGS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_shets_LOGGS', function($table){
         $table->tinyInteger('shetsIdent');
		 $table->string('shetsParam',1);
         $table->string('shetsPrjct',50);
         $table->string('shetsKrywn',50);
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
		Schema::drop('t_shets_LOGGS');
	}

}
