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
<<<<<<< HEAD
            $table->SoftDeletes('deleted_at');
=======
          $table->SoftDeletes('deleted_at');
>>>>>>> 54b51ccf237a2973e4aa22bd42f2dd13567775c2
>>>>>>> 5c97588562fbf133ca8410095e5a1505ca13ab0d
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
