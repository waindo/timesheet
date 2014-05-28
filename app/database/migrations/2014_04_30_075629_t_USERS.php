<?php use Illuminate\Database\Migrations\Migration;

class tUSERS extends Migration {

   public function up()  {

       Schema::create('t_USERS', function($table){
         $table->increments('usersEmail');
         $table->string('usersPassw',10);
         $table->string('usersKrywn',50);
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