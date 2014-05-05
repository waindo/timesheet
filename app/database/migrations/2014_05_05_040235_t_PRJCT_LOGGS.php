<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPRJCTLOGGS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_PRJCT_LOGGS', function($table){
         $table->string('prjctParam',1);
         $table->string('prjctIdent',50);
         $table->Integer('prjctUsrid',50);
         $table->string('prjctNames',100);
         $table->tinyInteger('prjctInsta');
		 $table->string('prjctYears',4);
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
		Schema::drop('t_PRJCT_LOGGS');
	}

}
