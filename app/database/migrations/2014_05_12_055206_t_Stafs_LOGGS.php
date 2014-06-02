<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TStafsLOGGS extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_Stafs_LOGGS', function($table){
		 $table->string('stafsParam',1);
         $table->increments('stafsIdent');
		 $table->string('stafsEmail',100)->unique();
         $table->Char('stafsNames',100);
         $table->string('stafsTmlhr',100);
         $table->datetime('stafsTglhr');
         $table->string('stafsJekel',20);
	     $table->tinyInteger('stafsAgama');
		 $table->string('stafsAlamat',1000);
		 $table->string('stafsNomhp',20);
		 $table->string('stafsThnms',50);
		 $table->tinyInteger('stafsDvisi');
		 $table->string('stafsJabat',50);
		 $table->string('stafsUsrid',50);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('t_Stafs_LOGGS');
	}

}
