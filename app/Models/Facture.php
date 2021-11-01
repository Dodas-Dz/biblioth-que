<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $filable =['commande_id'];
    /* $table->id();
            $table->timestamps();
            $table->integer('commande_id')->unsigned();
            $table->foreign('commande_id')->references('id')->on('commandes');
    */
}
