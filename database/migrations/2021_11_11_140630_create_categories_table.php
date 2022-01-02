<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique();
            $table->SoftDeletes();
        });
        DB::table('categories')->insert(
            array(
                'name' => 'medecin',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'lettre et lingustique',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'islamique',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'preparation des grande ecole',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'programe des prepas scientifique',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'informatique',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'livre culture generale',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'livre comtabilite',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'livre des siences politique',  
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'livre de droite',  
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
        Schema::dropIfExists('categories');
    }
}
