<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbonnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonnes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mail');
            $table->string('name');
            $table->string('prenom');
            $table->string('image');
<<<<<<< HEAD
            $table->string('student_id')->unique();
            $table->SoftDeletes();
=======
            $table->string('student_id');
          $table->SoftDeletes('deleted_at');
>>>>>>> 54b51ccf237a2973e4aa22bd42f2dd13567775c2
            $table->date('date_naissance');
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonnes');
    }
}
