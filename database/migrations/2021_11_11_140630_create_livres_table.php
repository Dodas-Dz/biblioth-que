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
            $table->integer('isbn');
            $table->string('titre');
            $table->text('resumer');
            $table->integer('nbr');
            $table->string('langue');
            $table->date('anneé');
            $table->string('autuer');
          
           // $table->foreignId('category_id')->constrained();
            
           
        });
        DB::table('livres')->insert(
            array(
                'isbn' => '77777777',
                'titre' => 'zakaria',
                'resumer' => 'zakaria.beloufa13@gmail.com',
                'nbr' => '50',
                'langue' =>'eng',  
                'anneé' =>'2015-10-17',  
                'autuer' =>'admin',  
                
            )
        );
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
