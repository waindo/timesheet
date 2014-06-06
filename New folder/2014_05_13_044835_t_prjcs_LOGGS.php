<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TPrjcsLOGGS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
{
		Schema::create('t_prcjs_LOGGS', function($table){
         $table->string('prjcsParam',1);
         $table->string('prjcsIdent',50);
         $table->Integer('prjcsUsrid',50);
         $table->string('prjcsNames',100);
         $table->tinyInteger('prjcsInsta');
		 $table->string('prjcsYears',4);
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
		Schema::drop('t_prjcs_LOGGS');
	}

}

