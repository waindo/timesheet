<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKryws extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('t_Kryws', function($table){
	
		$table->increments('krywsIdent');
		$table->string('krywsNkywn',100);
         $table->Char('krywsNames',100);
         $table->string('krywsTmlhr',100);
         $table->datetime('krywsTglhr');
         $table->string('krywsJekel',20);
	$table->tinyInteger('krywsAgama');
	$table->string('krywsAlmat',1000);
	$table->string('krywsNomhp',20);
	$table->string('krywsThnms',50);
	$table->tinyInteger('krywsDvisi');
	$table->string('krywsJabat',50);
	$table->string('krywsUsrid',50);
	
	
	
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
		Schema::drop('t_Kryws');
	}

}
