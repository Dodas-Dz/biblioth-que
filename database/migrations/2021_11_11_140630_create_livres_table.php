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
            $table->integer('nbr');
            $table->string('langue');
            $table->date('anneé');
            $table->string('auteur');
           $table->foreignId('category_id')->constrained();
            
           
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
