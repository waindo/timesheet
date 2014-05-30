<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
   public function up()  {

       Schema::create('t_USERS', function($table){
         $table->increments('usersEmail');
         $table->string('usersPassw',10);
         $table->string('usersUsrid',50);
         
         $table->timestamps();
      });
	  

 }

 public function down()
 {
     Schema::drop('t_USERS');
 }

}

?>
