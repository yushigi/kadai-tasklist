<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToTasksTable extends Migration
{
   
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->string('status',10);
        });
    }

   
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
