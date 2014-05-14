<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TUsrgs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_usrgs', function($table){
         $table->string('usrgsEmail',100);
         $table->string('usrgsNames',50);
         $table->Integer('UsrgsUsrid',50);
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
		Schema::drop('t_usrgs');
	}

}
