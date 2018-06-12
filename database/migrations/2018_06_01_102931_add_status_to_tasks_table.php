<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToTasksTable extends Migration
{
   
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
        
            $table->integer('user_id')->unsigned()->index();
            $table->string('status',10);
     
            
            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

   
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
