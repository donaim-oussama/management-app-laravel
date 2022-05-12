<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('code_apogee')->primary();
            $table->string('cne')->unique();
            $table->string('cin')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->string('adresse');
            $table->string('email_institutionnel')->unique();
            $table->string('email_personnel')->unique();
            $table->string('telephone')->unique();
            $table->enum('sexe', ['homme', 'femme']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
