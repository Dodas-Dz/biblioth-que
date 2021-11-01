<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tva extends Model
{
    use HasFactory;
    protected $filable =['pourcentage'] ;
    /*
       $table->double('pourcentage', 15, 8);
            $table->timestamps(); */
}
