<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TCodesLoggs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_codes_loggs', function($table){
         $table->string('codesParam',1);
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
		Schema::drop('t_codes_loggs');
	}

}
