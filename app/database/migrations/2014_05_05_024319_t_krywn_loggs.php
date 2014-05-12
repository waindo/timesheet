<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TKrywnLoggs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_Krywn_loggs', function($table){
         $table->string('krywnParam',10);
	$table->increments('krywnIdent');
         $table->Char('krywnNames',100);
         $table->string('krywnTmlhr',100);
         $table->datetime('krywnTglhr');
         $table->string('krywnJekel',20);
	$table->tinyInteger('krywnAgama');
	$table->string('krywnAlamat',1000);
	$table->string('krywnNomhp',20);
	$table->string('krywnThnms',50);
	$table->tinyInteger('krywnDvisi');
	$table->string('krywnJabat',50);
	$table->string('krywnUsrid',50);
	
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
		Schema::drop('t_Krywn_loggs');
	}

}
