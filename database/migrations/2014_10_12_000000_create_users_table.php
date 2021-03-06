<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->SoftDeletes('deleted_at');
            $table->enum('role',  ['gestion','admin']);
        });
        DB::table('users')->insert(
            array(
                'name' => 'zennaki',
                'prenom' => 'younes',
                'email' => 'zennaki.younes@outlook.fr',
                'password' => Hash::make('zennaki31'),
                'role' =>'admin',
                
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'tabet',
                'prenom' => 'hadjer',
                'email' => 'tabethadjer2706@gmail.com',
                'password' => Hash::make('tabet31'),
                'role' =>'admin',
                
            )
        );
        DB::table('users')->insert(
            array(
                'name' => 'beloufa',
                'prenom' => 'zakaria',
                'email' => 'zakaria.beloufa13@gmail.com',
                'password' => Hash::make('beloufa31'),
                'role' =>'admin',  
                
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
        Schema::dropIfExists('users');
    }
}
