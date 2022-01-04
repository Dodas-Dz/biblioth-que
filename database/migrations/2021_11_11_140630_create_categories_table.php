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
            $table->integer('nbr_livre');
            $table->SoftDeletes('deleted_at');
        });

    }
    /* DB::table('categories')->insert(
            array(
                'name' => 'medecin', 
                'nbr_livre'=> '3',
            )
        );
    }
    
                       /* DB::table('categories')->insert(
                            array(
                                'name' => 'lettre et lingustique',  
                                'nbr_livre'=> '3',
                            )
                        );
                    
                    DB::table('categories')->insert(
                        array(
                            'name' => 'islamique',  
                            'nbr_livre'=> 'null',
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'preparation des grande ecole',  
                            'nbr_livre'=> 'null',
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'programe des prepas scientifique',  
                            'nbr_livre'=> 'null',
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'informatique',  
                            'nbr_livre'=> 'null',
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'livre culture generale',
                            'nbr_livre'=> 'null',  
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'livre comtabilite',  
                            'nbr_livre'=> 'null',
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'livre des siences politique', 
                            'nbr_livre'=> 'null', 
                        )
                    );
                    DB::table('categories')->insert(
                        array(
                            'name' => 'livre de droite',  
                            'nbr_livre'=> 'null',
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
