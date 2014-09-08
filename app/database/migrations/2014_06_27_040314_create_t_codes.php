<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTCodes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_Codes', function($table){
         $table->tinyInteger('codesHeads');
         $table->tinyInteger('codesCodes');
         $table->string('codesDesc1',100);
         $table->string('codesDesc2',100);
         $table->binary('codesStats');
		 $table->string('codesUsrid',50);
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
		Schema::drop('t_Codes');
	}

}
