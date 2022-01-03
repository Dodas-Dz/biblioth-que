<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mots', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mot_cle')->unique();
            $table->integer('nbr_livre');
            $table->SoftDeletes('deleted_at');
        });

        DB::table('mots')->insert(
            array(
                'mot_cle' => 'étude', 
                'nbr_livre'=> '3',
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
        Schema::dropIfExists('mots');
    }
}
