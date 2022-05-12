<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table){

            $table->increments('id');
            $table->string('title')->unique();
            $table->string('description', 1000);
            $table->integer('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
            $table->date('dateLancement');
            $table->date('dateRealisation');

        });

        /*Schema::table("project",function(Blueprint $table){
            $table->foreign('id_category')->references('id')->on('category')->onDelete('cascade');
        });*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("project",function(Blueprint $table){
            $table->dropForeign("id_category");
        });
        Schema::dropIfExists('projects');
    }
}
