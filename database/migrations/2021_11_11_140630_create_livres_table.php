<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('isbn');
            $table->string('titre');
            $table->text('resumer');
            $table->text('image');
            $table->integer('nbr');
            $table->string('langue');
            $table->dateTime('anneé');
            $table->string('auteur');
            $table->SoftDeletes('deleted_at');
            $table->foreignId('category_id')/*->constrained()*/;
            $table->foreignId('mot_id');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
}
